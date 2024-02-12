@extends('layouts.app')
@push('css')
    <style>
       #calendar a{
            color:#000;
            text-decoration:none;
       }

       .mr-auto{
            margin-right:auto;
       }
    </style>
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="calendar">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="eventModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</div>
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script> 
    <script>
        document.addEventListener('DOMContentLoaded',function(){
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl,{
                initialView: 'dayGridMonth',
                initialDate: new Date(),
                headerToolbar:{
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth, timeGridWeek, timeGridDay'
                },
                dateClick:function(info){
                    console.log(info);
                    $('#eventModal').show();
                }
            });
            calendar.render();
        });
    </script>
@endpush

@endsection