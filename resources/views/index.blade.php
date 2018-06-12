<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
  </head>
  <body>

    <div class="jumbotron container">
      <div class="col-md-12">
        <h2>Main Page</h2>
      </div>
    </div>

<div class="container">
    <div class="row">
      <div class="table table-responsive">
        <table class="table table-bordered" id="table">
          <tr>
            <th width="150px">No.</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th class="text-center" width="150px">
              <a href="#" class="create-model btn btn-success btn-sm">
                <i class="glyphicon glyphicon-plus"></i>
              </a>
            </th>
          </tr>
        </table>
      </div>
    </div>
  </div>

  </body>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
