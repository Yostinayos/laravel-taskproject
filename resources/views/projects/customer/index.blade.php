@section('title','Customers')
       
<x-app-layout>
    <div class="container px-10 pr-4"> 

        <div className="overflow-x-auto">
            <table className="table">
              <!-- head -->
              <thead>
                <tr class="py-14">
                  <th></th>
                  <th>CustomerName</th>
                  <th>email</th>
                  <th>projects </th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               @php
                $count=0;

               @endphp 
                <!-- row 1 -->
                @foreach ($customers as $customer)
                <tr class="py-14">
                    <td >{{ $count+=1 }}</td>
                  <td><div class="col-span-2 mr-2">  {{ $customer->name }}</div></td>
                  <td><div class="col-span-2 mr-2">  {{ $customer->email }}</div></td>
                  @foreach ($customer->projects as $project)
                  <td><div class="col-span-2 mr-2"> name:{{ $project->name }}/ending_date:{{ $project->ending_date }}/
                   
                   leader: {{ $project->user->name }}</div>
               
                @endforeach
                
                <td><div class="col-span-2 mr-2">
                    
                        <a href='{{route("customers.show", $customer->id)}}' class='btn btn-neutral'>
                            <i class="fa fa-eye"></i>
                        </a>
                        
                    
                </div></td></tr>
                @endforeach
        
        </tbody>
      </table>
    </div>
    
    
    </div>
    
</x-app-layout>
