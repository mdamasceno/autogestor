@extends('layouts.template')
@section('header')
<img src="https://camo.githubusercontent.com/313c54dad1e3674a8b417d13a803a2273b9abe798d0c6bfd7c0f3325a8bc532e/687474703a2f2f6175746f676573746f722e6e65742f75706c6f6164732f313536383339383537342e737667">
@endsection
@section('section')
<div class="d-flex justify-content-center align-items-center flex-column">
    <h2 class="mt-5"><i class="fas fa-user-circle"></i> Consulta de Clientes</h2>
    <div class="mt-3 d-flex justify-content-center align-items-center" style="width:100%;">
        <form method="POST" class="d-flex" style="width:50%;" id="searchForm">
            @csrf
            <input name="search" class="form-control" style="border-radius:5px 0px 0px 5px;;border:none;" type="text" id="search" placeholder="Digite o nome">
            <select class="custom-select" style="border:none;border-radius:0px;" id="category">
                <option value="0">Todas as categorias</option>
                @foreach ($categories as $category)
                   <option value="{{$category->id}}">{{$category->category}}</option>     
                @endforeach
            </select>
            <button class="btn" style="color:#294c65;background-color:#fff;border-radius:0px 5px 5px 0px;"><i class="fa fa-search"></i></button>
        </form>        
    </div>
    <div class="justify-content-between align-items-center flex-column mt-3" id="searchResults" style="width:50%;display:none;"> 
        <h5 id="results"></h5>                 
        <div class="table-responsive mt-1" style="background-color:#ffffff;border-radius:5px;padding:15px;">
            <table class="table" style="background-color:#ffffff;">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Telefone</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class='clientInfo'>
                        <td class="clientName"></td>
                        <td class="clientPhone"></td>
                        <td>
                            <div>
                                <label class="clientCategory"></label>
                                <img width="10px" class="categoryLogo">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
</div>
<script>
$(function(){
    $('#searchForm').on('submit',function(e){
        e.preventDefault();
        var search = $('#search').val();
        var category = $('#category').val();
        var _token = $('input[name="_token"]').val();
        var n = $('.clientInfo').length;
        for(i=1;i<n;i++){
            $('.clientInfo').last().remove();
        }
        $('.clientName').last().text('');
        $('.clientPhone').last().text('');
        $('.clientCategory').last().text('');
        $('#searchResults').css('display','none'); 
        $.ajax({
            url:"{{route('search')}}",
            type:'POST',
            dataType:'JSON',
            data:{search:search,category:category,_token:_token},
            success: function(data){
                var obj = JSON.parse(data);
                var count = obj.length;
                if(count > 0){
                    for(i=0;i<count;i++){
                        if(i == 0){
                            $('.clientName').last().text(obj[i]['name']);
                            $('.clientPhone').last().text(obj[i]['phone']);
                            $('.clientCategory').last().text(obj[i]['category']);
                        }else{
                            $('.clientInfo').last().clone().appendTo('tbody');
                            $('.clientName').last().text(obj[i]['name']);
                            $('.clientPhone').last().text(obj[i]['phone']);
                            $('.clientCategory').last().text(obj[i]['category']);
                        }
                    }
                    $('#results').text(count+" resultados encontrados");
                    $('#searchResults').css('display','flex');   
                }else{
                    alert("Nenhum cliente encontrado!");
                }
                                
            }
        });       
    });
});
</script>
@endsection