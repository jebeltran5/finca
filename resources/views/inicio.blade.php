<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               
                <x-infobox title="Total de Usuarios" :data="$totalUsuarios" />
                <x-infobox title="Total de Fincas" :data="$totalFincas" />

                @if(!empty($chartData))
                    <x-chart type="pie" :data="$chartData" />
                @else
                    <p>No hay datos para mostrar en el gráfico.</p>
                @endif

              
                <x-datatable :headers="$tableHeaders" :rows="$tableRows" />
            </div>
        </div>
    </div>
</x-app-layout>
