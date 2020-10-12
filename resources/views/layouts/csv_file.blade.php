
 <body>
  <div class="container">    
     <br />
    
     <br />
     <div class="panel panel-default">
          <div class="panel-heading">
           <h3 class="panel-title">Laravel 5.8 - Import Export Data in CSV File</h3>
          </div>
          <div class="panel-body">
           <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".csv">
                  <br>
                  <button class="btn btn-success">Import User Data</button>
                 
           </form>
              @yield('csv_data')
          </div>
      </div>
  </div>
 </body>
</html>