  var Login = function(path){
            
         $.ajax({
         url: path,
         type: 'POST',
         data: $('form').serialize(),
         dataType:'Json',
         beforeSend:function(){
          $('.btn-block').attr('disabled',true);
          $('.btn-block').html('Carregando...');
         },
         success:function(data){
           
          var retornoClass = data['class'];
           
           setTimeout(function(){
               
               $('.alert').fadeOut();
               $('.alert').removeClass(retornoClass);
               $('.btn-block').attr('disabled',false);
               $('.btn-block').html('logar');
               
               if(data['page']){
                   
                       $(location).attr('href',data['page']);
               }
            },2000);
                       
           $('.alert').fadeIn().addClass(retornoClass);
           $('.alert strong').html(data['msg']);
                  
         },
         error:function(){
             
           alert('Erro para retornar');    
         
         }   
         
     });
     
    }