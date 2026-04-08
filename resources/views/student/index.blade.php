<x-app>
<x-slot:title>{{ $title }}</x-slot>

<ul class="list-group">
   @foreach ($students as $student)
   <li class="list-group-item">{{ $student->name }} {{ $student->name }}</li>
   @endforeach
      
</ul>

   <h1 class="fw-bold">Student Page</h1>


</x-app>