<div class="row">
    @yield('alert')

    @foreach($publications as $publication)
        
        @include('publication.institution')
        
        <div class="col-sm-6 col-md-9">
        <time class="published" datetime="yyyy-MM-dd"><?php echo date('d-M-Y', strtotime($publication->date_publication)); ?></time>        
        @if (! Auth::guest())
            @if((Auth::user()->type==2 && Auth::user()->activedMe)||(Auth::user()->type==3))
                

                   @if($publication->type==1)
                  <ul class="nav navbar-nav navbar-right">
                     <a href="{{ route('teacher_call.edit', $publication->id) }}"><button type="button" href="" class="btn btn-primary">Editar 
                     <i class="glyphicon glyphicon-edit"></i></button></a>  
                      </ul>  
                    @endif

                    @if($publication->type==2)
                    <ul class="nav navbar-nav navbar-right">
                    <a href="{{ route('scientific_magazine.edit', $publication->id) }}" ><button type="button" class="btn btn-primary">Editar 
                    <i class="glyphicon glyphicon-edit"></i></button></a>
                    </ul>
                    @endif

                    @if($publication->type==3)
                    <ul class="nav navbar-nav navbar-right">
                    <a href="{{ route('academic_event.edit', $publication->id) }}" ><button type="button" class="btn btn-primary">Editar 
                    <i class="glyphicon glyphicon-edit"></i></button></a>
                    </ul>
                    @endif

               
                @if($publication->type==1)
                <ul class="nav navbar-nav navbar-right">
                {!! Form::open(array('route' => array('teacher_call.destroy', $publication->id), 'method' => 'delete')) !!}
                    <button class="btn btn-danger" type="submit">Eliminar 
                    <i class="glyphicon glyphicon-remove-circle"></i></button>
                {!! Form::close() !!}
                    &nbsp;&nbsp;
                </ul>
                @endif
                @if($publication->type==2)
                <ul class="nav navbar-nav navbar-right">
                {!! Form::open(array('route' => array('scientific_magazine.destroy', $publication->id), 'method' => 'delete')) !!}
                    <button class="btn btn-danger" type="submit">Eliminar 
                    <i class="glyphicon glyphicon-remove-circle"></i></button>
                {!! Form::close() !!}
                    &nbsp;&nbsp;
                </ul>
                @endif
                @if($publication->type==3)
                <ul class="nav navbar-nav navbar-right">
                {!! Form::open(array('route' => array('academic_event.destroy', $publication->id), 'method' => 'delete')) !!}
                    <button class="btn btn-danger" type="submit">Eliminar 
                    <i class="glyphicon glyphicon-remove-circle"></i></button>
                {!! Form::close() !!}
                    &nbsp;&nbsp;
                </ul> 
                @endif
            @endif
        @endif
        @include('publication.information')
        </div>

    @endforeach
</div>

	@include('publication.inner')
