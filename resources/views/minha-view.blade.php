<h1>Ola,essa é minha view</h1>

<style>
    table,
    th,
    td { 
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
<table>
    <thead>
        <tr>
          <th>id</th>
          <th>name</th>
        </tr> 
    </thead>
 <tbody>
     @foreach ( $lista as $item)
   

       
     <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
     </tr>

   @endforeach
  </tbody>
</table>


@dump($lista)