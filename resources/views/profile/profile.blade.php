@extends('base')

@section('content')
       
           
                        @auth
                        
                            <div class="fs-3 lh-sm mb-5 mt-3 text-white text-center">
           
                                Welcome, {{ auth()->user()->name }} to the Home Profile
                            </div>
                            <div class="container">

                            <table class="table table-bordered text-white">
                             <thead>
    <tr  class="text-warning">
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Cnic</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ auth()->user()->id }}</td>
      <td>{{ auth()->user()->name }}</td>
      <td>{{ auth()->user()->email }}</td>
      <td>{{ auth()->user()->cnic }}</td>
      <td>{{ auth()->user()->phone }}</td>
    </tr>
  </tbody>
</table>
<a href="/services" style="text-decoration:underline yellow;">Click here to Register Vehicle</a>

</div>


                            <!-- <form action="/logout" method="post">
                                 @csrf
                                <button class="btn btn-lg contact-btn text-white rounded-pill mt-5" type="submit">Logout</button>
                            </form>
                             --> -->
                        @endauth
                
                    
                </div>
            </div>
        </div>
        
      
    </div>
</section>


@endsection
