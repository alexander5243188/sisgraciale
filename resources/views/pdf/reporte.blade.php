<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Comercial Fuentes</title>
	
	<link rel="stylesheet" href="{{ public_path('css/custom_pdf.css') }}">
	<link rel="stylesheet" href="{{ public_path('css/custom_page.css') }}">

</head>
<body>
	
	<section class="header" style="top: -287px;">
		<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td colspan="2" class="text-center">
					<span style="font-size: 25px; font-weight: bold;">Comercial Fuentes</span>
				</td>				
			</tr>
			<tr>
				<td width="30%" style="vertical-align: top; padding-top: 10px; position: relative">
					<img src="{{ asset('assets/img/livewire_logo.png') }}" alt="" class="invoice-logo">
				</td>

				<td width="70%" class="text-left text-company" style="vertical-align: top; padding-top: 10px">
					
					<span style="font-size: 16px"><strong>Avenida Republica # 1647</strong></span>
					<br>
					<span style="font-size: 16px"><strong>Tel. 4560225</strong></span>
					<br>
					<span style="font-size: 16px"><strong>Cochabamba - Boliva </strong></span>					
					<br>
					<span style="font-size: 16px"><strong>Factura </strong></span>
					<br>
					<span style="font-size: 16px"><strong>NIT: </strong></span>
					<br>
					<span style="font-size: 16px"><strong>Factura N° </strong></span>
					<br>
					<span style="font-size: 16px"><strong>Autorización N° </strong></span>
					
					<br>					
					<span style="font-size: 16px"><strong>Fecha de Consulta: {{ \Carbon\Carbon::now()->format('d-M-Y')}}</strong></span>					
					<br>
					<span style="font-size: 14px">SEÑOR(ES): {{$user}}</span>
					<br>
					<span style="font-size: 14px">NIT:</span>
				</td>
			</tr>
		</table>
	</section>


	<section style="margin-top: -50px">
		<table cellpadding="0" cellspacing="0" class="table-items" width="100%">
			<thead>
				<tr>
					<th width="10%">DESCRIPCION</th>
					<th width="12%">CANT</th>
					<th width="10%">PRECIO</th>
					<th width="12%">TOTAL</th>					
				</tr>
			</thead>
			<tbody>
				@foreach($data as $item)
				<tr>
					<td align="center">{{$item->id}}</td>
					<td align="center">{{number_format($item->total,2)}}</td>
					<td align="center">{{$item->items}}</td>
					<td align="center">{{$item->status}}</td>					
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td class="text-center">
						<span><b>TOTALES</b></span>
					</td>
					<td colspan="1" class="text-center">
						<span><strong>${{ number_format($data->sum('total'),2)}}</strong></span>
					</td>	
					<td class="text-center">
						{{$data->sum('items')}}
					</td>						
					<td colspan="3"></td>
				</tr>
			</tfoot>
		</table>
	</section>


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