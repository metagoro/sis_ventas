<div class="modal fade modal-slide-in-right" aria-hidden="true"

role="dialog" tabindex="-1" id="modal-delete-{{$per->idpersona}}">	
	{{Form::Open(array('action'=>array('ClienteController@destroy',$per->idpersona),'method'=>'delete'))}}

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
				<h4 class="modal-title">Eliminar Cliente</h4>
			</div>
			<div class="modal-body">
				<p>confirme si desea elimina Cliente</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" >cerrar</button>
				<button type="submit" class="btn btn-primaty">cofirmar</button>
				
			</div>
		</div>	
	</div>
	{{Form::Close()}}
</div>