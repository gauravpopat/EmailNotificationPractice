<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
<form action="{{route('sendEmail')}}" method="POST" class="m-5">
    @csrf
    <div class="container justify-content-center">
    <div class="form-group">
        <label for="from">From :</label>
        <input type="email" class="form-control" name="from" id="from" aria-describedby="emailHelp" value="{{env('MAIL_FROM_ADDRESS')}}" readonly>
      </div>
    <div class="form-group">
      <label for="to">To :</label>
      <input type="email" class="form-control" name="to" id="to" value="{{old('to')}}" aria-describedby="emailHelp" placeholder="Enter Email">
        @error('to')
    <small id="smalltext" class="form-text text-danger">{{$message}}</small>            
        @enderror
    </div>
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" name="subject" value="{{old('subject')}}" id="subject" placeholder="Write Subject">
        @error('subject')
    <small id="smalltext" class="form-text text-danger">{{$message}}</small>            
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
        @error('body')
    <small id="smalltext" class="form-text text-danger">{{$message}}</small>            
        @enderror
    </div>
    <button type="submit" class="col-md-12 text-center btn btn-primary">Send Mail</button>
    @if (Session::has('success'))
    <small id="smalltext" class="d-flex align-items-center justify-content-center alert alert-success" role="alert">{{Session::get('success')}}</small>
    @endif
</div>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
