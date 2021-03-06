@extends ('layouts.admin')
@section ('contenido')
<section class="content-header">
	<h1 style="margin-top: 55px;">
		Panel de Administrador
		<small>Version 2.3.0</small>
    </h1>
    <ol class="breadcrumb" style="margin-top: 55px;">
    	<li>
    		<a href="#">
    			<i class="fas fa-dolly"></i> Productos</a>
    	</li>
    	<li class="active">Lista</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border" style="padding: 10px !important">
					<h4>
						<strong style="font-weight: 400">
							<i class="fas fa-list-ul"></i> Lista de Productos
						</strong>
					</h4>
					<div class="ibox-title-buttons pull-right">
						<a href="{{route('producto-create')}}" style="text-decoration: none !important">
							<button class="btn btn-block btn-success" style="background-color: #18A689 !important;">
								<i class="fas fa-plus-circle"></i> Nuevo Producto
							</button></a>
					</div>
				</div>
                @include('proforma.producto.search')
				<div class="box-body">
					<table id="example" class="table table-striped table-bordered table-hover" style="width:100%;font-size: 11px !important">
				       <thead>
				            <tr>
				                <th>N° Serie</th>
				                <th>Código Pedido</th>
				                <th>Código</th>
				                <th>Nombre</th>
				                <th>Marca</th>
				                <th>Precio</th>
				                <th>Opciones</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach($productos as $pro)
				        	<tr>
				        		<td>
				        			{{$pro->serie_producto}}
				        		</td>
				        		<td>
				        			{{$pro->codigo_pedido}}
				        		</td>
				        		<td>
				        			{{$pro->codigo_producto}}
				        		</td>
				        		<td>
				        			{{$pro->nombre_producto}}
				        		</td>
				        		<td>
				        			{{$pro->marca_producto}}
				        		</td>
				        		<td>
				        			S/. {{$pro->precio_unitario}}
				        		</td>
				        		<td align="center">
				        			<a  href=""  data-target="#modal-show-{{$pro->idProducto}}"  data-toggle="modal" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="left" title="Ver Producto"><i class="far fa-eye"></i> </a>
									<a href="{{route('producto-edit',$pro->idProducto)}}" class="btn btn-success btn-xs" role="button"><i class="fas fa-edit" title="Editar Producto"></i> </a>
									<a href="" data-target="#modal-delete-{{$pro->idProducto}}"  data-toggle="modal" class="btn btn-danger btn-xs" title="Eliminar Producto"><i class="fas fa-trash-alt"></i> </a>
								</td>
							</tr>
							@include('proforma.producto.modal')
							@include('proforma.producto.modal-producto')
							@endforeach
				        </tbody>
				       
    				</table>
    				{{$productos->render()}}
				</div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
</section><!-- /.content -->
@endsection

