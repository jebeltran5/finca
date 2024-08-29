<table class="min-w-full bg-white border border-gray-200">
    <head>
        <tr>
            @foreach ($headers as $header)
             <th class="py-2" px-4 border-b>{{ $header }}</th>
            @endforeach
        </tr>
    </head>
    <tbody>
        @foreach ($rows as $row)
        <tr>
            @foreach ($row as row)
               <td class="py-2" border-b>{{ $cell }}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>