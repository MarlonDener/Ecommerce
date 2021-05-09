$(function(){

		var open = true;
		var teste = true;
		var windonSize = $(window)[0].innerWidth;
		var targetSizeMenu = (windonSize <= 400) ? 170 : 200;
		if(windonSize <= 600){
			$('.menu').css('width','0').css('padding','0');
			open = false;
		}

	
		$('.menu-btn').click(function(){
			
			if(windonSize > 600){

			if(open){
				
				$('.menu').animate({'width':0,'padding':0},function(){
					open = false;

				});
				$('.content,header').css('width','100%');
				$('.content,header').animate({'left':0},function(){

					open = false;
				});
			}else{

				$('.menu').css('display','block');
				$('.menu').animate({'width':targetSizeMenu+'px','padding':'0px'},function(){
					open = true;

				});
				$('.content,header').css('width','calc(100% - 200px)');
				$('.content,header').animate({'left':targetSizeMenu+'px'},function(){

					open = true;
				});

			}

		}else{

			if(teste){
			if(windonSize > 350 && windonSize < 600){
			$('.menu').fadeIn(1200);	
			$('.menu').css('display','block').css('width','54%').css('z-index','100');
		
						teste = false;
		}else{
			$('.menu').fadeIn(1200);
			$('.menu').css('display','block').css('width','200px').css('z-index','80');
			
			
			
			teste = false; 


		}
			
			
					}else{
						$('.menu').css('display','none').css('width','2px').css('z-index','100');
					
						
						teste = true;
					}
					
		}

		})

		$(window).resize(function(){
			windonSize = $(window)[0].innerWidth;
			if(windonSize <= 768){

				$('.menu').css('width','0').css('padding','0');
				$('.content,header').css('width','100%').css('left','0');
				open = false;

			}else{
				open=true;
				$('.content,header').css('width','calc(100% - 200px)').css('left','200px');
				$('.menu').css('width','200px').css('padding','0px 0');
				$('.menu').css('display','block');
			
					
			}



		})

		// Alerta para se realmente voce pretende deletar o usuario da lista de depoimentos

		$('[actionBtn=delete]').click(function(){
		
		var r = confirm("Você realmente deseja excluir ?");
		if(r == true){
			return true;
		}else{
			return false;
		}


		})

})

