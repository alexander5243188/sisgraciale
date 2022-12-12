<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Comercial Fuentes</title>
	
	<link rel="stylesheet" href="{{ public_path('css/custom_pdf.css') }}">
	<link rel="stylesheet" href="{{ public_path('css/custom_page.css') }}">
<style>
	@page {
            margin: 2cm 2cm;
            font-size: 1em;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {			
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 250px;
  			width: 100%;           	
            text-align: center;
            line-height: 25px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            text-align: center;
            line-height: 35px;		
        }
		.columna {
			width:33%;
			float:left;
		}
		
</style>
</head>
<body>
	<header>
	<div class="columna"><img src="../public/storage/comercial.png" alt="" style="max-height: 120px; max-width: 240px;"></div>
	<div class="columna">
		<span style="font-size: 25px; font-weight: bold;">Comercial Fuentes</span>
		<br>
		<span style="font-size: 16px"><strong>Reporte de ventas</strong></span>
		<br>
		<span style="font-size: 16px"><strong>{{ \Carbon\Carbon::now()->format('d-M-Y')}}</strong></span>
	</div>
	<div class="columna"> 
		<br>
		<br>
		<span style="font-size: 14px"><strong>Usuario: {{$user}}</strong></span>
	</div>
	</header>	
		<table cellpadding="0" cellspacing="0" class="table-items" width="100%">
			<thead>
				<tr>									
					<th colspan="1" width="">PRODUCTOS VENDIDOS</th>	
					<th colspan="1" width="" class="text-right" >PRECIO</th>													
					<th colspan="1" width="">FECHA</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $item)
				<tr>					
					<td colspan="1" align="center">{{$item->items}}</td>						
					<td colspan="1" align="right">{{number_format($item->total,2)}}</td>														
					<td colspan="1" align="center">{{$item->created_at}}</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td class="text-center">Total: {{$data->sum('items')}}</td>											
					<td colspan="1" class="text-right">
						<span><strong>Bs {{ number_format($data->sum('total'),2)}}</strong></span>
					</td>						
				</tr>
			</tfoot>
		</table>
	


	<section class="footer">

		<table cellpadding="0" cellspacing="0" class="table-items" width="100%">
			<tr>
				<td width="20%">
					<span>sistema de inventario y ventas</span>
				</td>				
				<td class="text-center" width="20%">
					página <span class="pagenum"></span>				
				</td>

			</tr>
		</table>
	</section>

</body>
</html>