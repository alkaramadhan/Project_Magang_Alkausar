<!-- alluser.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Follow Unfollow Functionality Tutorial With Example</title>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    
   
</head>

<body>
    <div class="container">
        <h2>Laravel Follow Unfollow Functionality Tutorial With Example</h2>
        <br>
        <div class="row pl-4">
            @foreach($users as $user)
            @if(auth()->user()->id !== $user->id)
            <div class="card" style="width:250px">
                <img class="card-img-top" src="/images/avatar.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">{{ $user->name }}</h4>
                    <p class="mb-2">
                        <small>Following: <span
                                class="badge badge-primary">{{ $user->followings()->get()->count() }}</span></small>
                        <small>Followers: <span
                                class="badge badge-primary">{{ $user->followers()->get()->count() }}</span></small>
                    </p>
                    <button class="btn btn-info follow" data-id="{{ $user->id }}">
                        <strong>
                            @if(auth()->user()->isFollowing($user))
                            UnFollow
                            @else
                            Follow
                            @endif
                        </strong>
                    </button>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.follow').click(function () {
                jQuery.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var id = $(this).data('id');
                console.log(id);
                var reference = $(this);
                jQuery.ajax({
                    type: 'POST',
                    url: '/ajaxRequest',
                    data: {
                        user_id: id
                    },
                    success: function (data) {
                        if (jQuery.isEmptyObject(data.success.attached)) {
                            reference.find("strong").text("Follow");
                        } else {
                            reference.find("strong").text("UnFollow");
                        }
                    }
                });
            });
        });

    </script>
</body>

</html>
