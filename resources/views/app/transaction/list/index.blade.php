<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
    </head>
    <body class="app">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>welcome to the transaction list</h1>
                    <h2>1. Panel x Card</h2>
                    <h3>1.1. First test</h3>
                    <div class="panel">
                        <div class="panel-body">
                            test on panel-body
                        </div>
                    </div>
                    <h3>1.2. Second test</h3>
                    <div class="card">
                        <div class="card-body">
                            test on card-body
                        </div>
                    </div>
                    <h3>1.3. Conclusion</h3>
                    <p class="alert alert-success">Panel is not working, the new bootstrap's on!</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ url('/js/app.js') }}"></script>
    </body>
</html>