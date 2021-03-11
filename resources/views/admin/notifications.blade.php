<input type="hidden" id="unread" value="{{ $unread }}">
@foreach($notifications as $notification)
<a class="d-flex flex-column" href="javascript:void(0)">
    <div class="media d-flex flex-column">
        <div class="d-flex">
            <div class="media-left"><i class="feather icon-bell font-medium-5 primary"></i></div>
            <div class="media-body">
                <h6 class="primary media-heading yellow darken-3">{{ $notification->data['title'] }}</h6>

            </div>
        </div>
        <div>
            <small class="notification-text">{{ $notification->data['body'] }}</small> 
        </div>
        <div class="mt-1">
            <small> <time class="media-meta"
                datetime="2015-06-11T18:29:20+08:00">{{ $notification->created_at }}</time></small>
        </div>


    </div>
    
</a>
@endforeach
