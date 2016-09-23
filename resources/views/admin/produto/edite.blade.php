
@extends('template')
@section('content')

 <div class="painel">
        <div class="page-header">
            <div class="text-info">
                <h4 class="text-info">
                    <i class="fa fa-folder-open fa-2x"></i> Editar Produto</h4>
            </div>
        </div>
             
      <!--  {{ print_r($errors)}}-->
      @if($errors->any())
        <div class='alert alert-danger'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                @foreach($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
        </div>
      
        @endif
        
                 {!! Form::open(['route'=>['admin.produto.updateProduto', $produto->id], 'method'=>'post']) !!}
 <div class="row">
                 <div class="form-group">
                    <div class="col-md-5">
                        
                         {!! Form::label('name', 'Nome:') !!}
                        {!! Form::text('name', $produto->name, ['class'=>'form-control']) !!}
                    </div>
                 </div>
 </div>
                 <div class="row">
                 <div class="form-group">
                     <div class="col-md-8">
                         
                         {!! Form::label('description', 'Descrição:') !!}
                         {!! Form::textarea('description', $produto->description, ['class'=>'form-control']) !!}
                    </div>
                </div>
                 </div>
                 <div class="row">
                <div class="form-group">
                    <div class="col-md-3">
                         
                         {!! Form::label('price', 'Price:') !!}
                         {!! Form::text('price', $produto->price, ['class'=>'form-control']) !!}
                    </div>
                </div>
                 </div>
                 <div class="row">
                <div class="form-group">
                    <div class="col-md-4 col-md-offset5">
                        {!! Form::label('destaque', 'Destaque:') !!}
                        {!! Form::select('featured', ['0' => 'Mais vendidos', '1' => 'Em promoção'], $produto->featured, ['class' => 'form-control']) !!}
  
                    </div>
                   
                </div>
                 </div>
                     
                      <div class="row">
                       <div class="form-group">
                            <div class="col-md-4">
                                {!! Form::label('recommend', 'Recomendado?') !!}
                           	     <div class="radio">
                                         
            <label>
                
                {!! Form::radio('recommend', 0, $produto->recommend == 0) !!}
                Sim
            </label>
            <label>
                {!! Form::radio('recommend', 1, $produto->recommend == 1) !!}
                Não
            </label>
        </div>
			                    
                            </div>
                       </div>
                  </div>
                 </div>
                    
             </div>

             <div class="modal-footer">
 
                 {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
 
                 {!! Form::close() !!}
                 <a id="add" href="{{ route('admin.produto.index') }}" <button class="btn btn-default" type="submit" name="fechar">Fechar</button></a><br />
             </div>
     </div>
         </div>
     </div>
 @endsection