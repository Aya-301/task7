<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row py-5 my-5 mx-5 px-5">
            <h2>Send Mail</h2>
            <form action="{{route('sendmail')}}" class="form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="name" placeholder="name" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <input type="email" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="phone" class="form-control" placeholder="phone number">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="subject" class="form-control" placeholder="subject">
                    </div>
                    <div class="col-lg-12 pt-2">
                        <textarea name="content" placeholder="write..." class="form-control" cols="30"
                            rows="10"></textarea>
                    </div>
                    <div class="col-lg-12 pt-2">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>