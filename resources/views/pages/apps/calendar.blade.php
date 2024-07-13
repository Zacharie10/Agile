@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/fullcalendar/main.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/datetimepicker/datetimepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-3 d-none d-md-block">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title mb-4">FullCalendar</h6>
            <div id='external-events' class='external-events'>
              <h6 class="mb-2 text-muted">Draggable Events</h6>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event' data-title="Sprint" data-description="Description for Sprint" data-color="#3788D8"></div>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event' data-title="Project" data-description="Description for Project" data-color="#00C851"></div>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event' data-title="Task" data-description="Description for Task" data-color="#FFBB33"></div>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event' data-title="Client Meeting" data-description="Description for Client Meeting" data-color="#FF4444"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-9">
        <div class="card">
          <div class="card-body">
            <div id='calendar'></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="fullCalModal" class="modal fade">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="modalTitle" class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div id="modalBody" class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="editEventBtn" type="button" class="btn btn-primary">Edit Event</button>
        <button id="deleteEventBtn" type="button" class="btn btn-danger">Delete Event</button>
      </div>
    </div>
  </div>
</div>

<div id="createEventModal" class="modal fade">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="modalTitle" class="modal-title">Add Event</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div id="modalBody" class="modal-body">
        <form id="createEventForm">
          <div class="form-group">
            <label for="eventTitle">Title</label>
            <input type="text" class="form-control" id="eventTitle" name="title" required>
          </div>
          <div class="form-group">
            <label for="eventDescription">Description</label>
            <input type="text" class="form-control" id="eventDescription" name="description">
          </div>
          <div class="form-group">
            <label for="eventStart">Start</label>
            <input type="text" class="form-control datetimepicker" id="eventStart" name="start" required>
          </div>
          <div class="form-group">
            <label for="eventEnd">End</label>
            <input type="text" class="form-control datetimepicker" id="eventEnd" name="end" required>
          </div>
          <div class="form-group">
            <label for="eventColor">Color</label>
            <input type="color" class="form-control" id="eventColor" name="color" value="#3788D8">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="saveEventBtn" type="button" class="btn btn-primary">Save Event</button>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-ui-dist/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/fullcalendar/main.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datetimepicker/datetimepicker.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script>
    $(document).ready(function() {
      var calendarEl = document.getElementById('calendar');
      var calendar;

      // Initialize FullCalendar
      calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,
        selectable: true,
        droppable: true,
        events: '/events',
        locale: 'fr', // Adjust this to your preferred locale
        eventClick: function(info) {
          $('#modalTitle').html(info.event.title);
          $('#modalBody').html(info.event.extendedProps.description);
          $('#editEventBtn').data('event-id', info.event.id);
          $('#deleteEventBtn').data('event-id', info.event.id);
          $('#fullCalModal').modal();
        },
        eventDrop: function(info) {
          updateEvent(info.event);
        },
        eventResize: function(info) {
          updateEvent(info.event);
        }
      });

      calendar.render();

      // Create Event Button Click
      $('#saveEventBtn').on('click', function() {
        var eventData = {
          title: $('#eventTitle').val(),
          description: $('#eventDescription').val(),
          start: $('#eventStart').val(),
          end: $('#eventEnd').val(),
          color: $('#eventColor').val()
        };

        $.ajax({
          url: '/events',
          method: 'POST',
          data: eventData,
          success: function(response) {
            $('#createEventModal').modal('hide');
            calendar.refetchEvents();
          },
          error: function(xhr, status, error) {
            console.error('Error adding event:', error);
          }
        });
      });

      // Edit Event Button Click
      $('#editEventBtn').on('click', function() {
        var eventId = $(this).data('event-id');
        var event = calendar.getEventById(eventId);
        if (event) {
          $('#eventTitle').val(event.title);
          $('#eventDescription').val(event.extendedProps.description);
          $('#eventStart').val(event.startStr);
          $('#eventEnd').val(event.endStr);
          $('#eventColor').val(event.backgroundColor);
          $('#createEventModal').modal('show');
        }
      });

      // Delete Event Button Click
      $('#deleteEventBtn').on('click', function() {
        var eventId = $(this).data('event-id');
        var event = calendar.getEventById(eventId);
        if (event) {
          event.remove();
          $('#fullCalModal').modal('hide');
          deleteEvent(eventId);
        }
      });

      // Delete Event Function
      function deleteEvent(eventId) {
        $.ajax({
          url: '/events/' + eventId,
          method: 'DELETE',
          success: function(response) {
            console.log('Event deleted successfully');
          },
          error: function(xhr, status, error) {
            console.error('Error deleting event:', error);
          }
        });
      }

      // Update Event Function
      function updateEvent(event) {
        $.ajax({
          url: '/events/' + event.id,
          method: 'PUT',
          data: {
            title: event.title,
            description: event.extendedProps.description,
            start: event.startStr,
            end: event.endStr,
            color: event.backgroundColor
          },
          success: function(response) {
            console.log('Event updated successfully');
          },
          error: function(xhr, status, error) {
            console.error('Error updating event:', error);
          }
        });
      }

      // Initialize datetimepicker
      $('.datetimepicker').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        icons: {
          time: 'fas fa-clock',
          date: 'fas fa-calendar',
          up: 'fas fa-chevron-up',
          down: 'fas fa-chevron-down',
          previous: 'fas fa-chevron-left',
          next: 'fas fa-chevron-right',
          today: 'fas fa-calendar-check-o',
          clear: 'fas fa-trash',
          close: 'fas fa-times'
        }
      });
    });
  </script>
@endpush
