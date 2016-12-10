jQuery(document).ready(function($) {
	

/* script for accrdion */

	$(function($) {
  var allAccordions = $('.accordion .accordion-content');
  var allAccordionItems = $('.accordion .accordion-header');
  $('.accordion > .accordion-header').click(function(e) {

    /* If the header block has a class Open, then hide the panel */
    
    if($(this).hasClass('open'))
    {
      $(this).removeClass('open');
      $(this).next().slideUp("slow");
    }

    /* else, then show the panel */

    else
    {
    allAccordions.slideUp("slow");
    allAccordionItems.removeClass('open');
    $(this).addClass('open');
    $(this).next().slideDown("slow");
    return false;
    }
  });
});

	// $.ajax({
	// type: "POST",
	// url: "model/mobile.php",
	// data: { name: "John", location: "Boston" }
	// }).done(function( msg ) {
	// alert( "Data Saved: " + msg );

// $("type="submit"").submit(function(e) {
//   /* Act on the event */
// e.preventDefault;
//   $('#main_content').load('model/mobile.php .poduct');

// });

// $("#mobile+form .show").click(function(event) {
//   /* Act on the event */
//   event.preventDefault();
//   $('#main_content').load('model/mobile.php .poduct');
// });

	// });

});



$(document).ready(function(){

  // переменная принимающая значение: all/some
  /* данная переменная по умолчанию равна 'all'
    если поля из филтров будут заполнены, то функции проверки полей подставят в значение этой переменной 'some'.
    После возврата информации с сервера данная переменная снова принимает значение 'all' и можна начинать с начала*/
  var how_many="all";
  
  /**
  * Событие клика по кнопке "Показать" на фильтре телефнов
  * 
  * Данное событие вызывает безымянную функцию, в теле которой прописан запрос AJAX
  */
  $('.show').click(function(e){
    e.preventDefault();
    /* Depending on the ID selects the model  (mobile, tablet, laptop) */
    var type_product = $(this).parents('form').prev().attr('id');
        $.ajax({
            type: 'POST', // метод которім пересілаются даные
            url: 'model/'+type_product+'.php?', //адресс файла на сервере, который принимает данные Замени значение на mobile.php для мобильніх телефонов
            //> код отвечающий за склейку строки с информацией запроса
            data: set_data(type_product),
            //<
            success: function(data){
                // $('#main_content').html('<p>Сюда должна вернуться data с mobile.php</p>');
                $('#main_content').html(data);
                how_many = "all"; //Возвращаем значение переменной how_many на изначальное "all"
            }
        });
  });
  
  /**
  * Функция возвращающая строку data
  *
  * 
  */
  function set_data(type_product)
  {
	var data = '';
	switch (type_product)
	{
		case "mobile":
			data = set_array($('#item-1 .companie'),"&companie%5B%5D=") +
				set_arrange($('#item-1 .screen'),"&screen") +
				set_arrange($('#item-1 .ram'),"&ram") +
				set_color($('#item-1 .color')) +
				set_text($('#item-1 .price-container .price_max'),"&price_max=") + 
				set_text($('#item-1 .price-container .price_min'),"&price_min=") +
				'&how_many=' + how_many;
		break;
		case "tablet":
			data = set_array($('#item-2 .companie'),"&companie%5B%5D=") + //
				set_arrange($('#item-2 .screen'),"&screen") +
				set_array($('#item-2 .memory'),"&memory%5B%5D=") +
				set_color($('#item-2 .color')) +
				set_text($('#item-2 .price-container .price_max'),"&price_max=") + 
				set_text($('#item-2 .price-container .price_min'),"&price_min=") +
				'&how_many=' + how_many;
		break;
		case "notebook":
			data = set_array($('#item-3 .companie'),"&companie%5B%5D=") + //
				set_array($('#item-3 .proc'),"&proc%5B%5D=") +
				set_array($('#item-3 .core'),"&core%5B%5D=") +
				set_arrange($('#item-3 .memory'),"&memory") +
				set_color($('#item-3 .color')) +
				set_text($('#item-3 .price-container .price_max'),"&price_max=") + 
				set_text($('#item-3 .price-container .price_min'),"&price_min=") +
				'&how_many=' + how_many;
		break;
	}
	  
	return data;
  }
  
  /**
  * Функция возвращающая мнимальное и максивмальное значение
  * 
  * Данная функция используется для полей с чекбоксами (так как их можно отметить несколько)
  она проверяет все чекбоксы обьекта, віделяет из их значения числа. После она возвращает 
  максимальное и минимальное число при их наличие
  *
  * @param {Object} obj - Обьект JQyery, в данном случае div, содержащий поля ввода
  * @param {string} some_text - Строка содержащая текст названия переменной в запросе 
  *
  * return {string} text - Строка в которой склеяны все значения отмеченных чекбоксов
  */
  function set_arrange(obj,some_text)
  {
	  var text_min; //минимальное значение
	  var text_max; //максимальное значение
	  var text = "";
	  obj.find('input').each(function(){ //проверка всех поллей ввода в обьекте
		  if ($(this).prop("checked")) // если есть отмеченной поле ввода
		  {
				var str = $(this).val(); //строка значения єлемента
				var arr = str.split('-'); //разделяем строку на массив
				//работаем с первым элементом массива
				if (arr[0]!="_") //если значение не пусто
				{
					if (text_min==null || (text_min!=null && text_min>arr[0]))
						text_min = Number(arr[0]);
				}
				else //если значение пусто
				{text_min = 0;} //присваиваем минимальному значению ноль
				//Работаем со вторым эд=лементом массива
				if (arr[1]!="_")
				{
					if (text_max==null || (text_max!=null && text_max<arr[1]))
						text_max = Number(arr[1]);
				}
				else //если значение пусто
				{text_max = 999;} //присваиваем максимальному значению 999
				
				how_many = "some"; //изменяем значение how_many
		  }
	  });
	  //склеиваем строку
	  if (text_min!=null)
		text += some_text + '_min=' + text_min;
	  if (text_max!=null)
		text += some_text + '_max=' + text_max;
	  return text;
  }
  
  /**
  * Функция возвращающая массив данных
  *
  * Данная функция используется для полей с чекбоксами (так как их можно отметить несколько)
  она проверяет все чекбоксы обьекта и возвращает все значения выбранных чекбоксов в специальной строке,
  которая воспринимается в POST запросе как массив
  *
  * @param {Object} obj - Обьект JQyery, в данном случае div, содержащий поля ввода
  * @param {string} some_text - Строка содержащая текст названия переменной в запросе 
  *
  * return {string} text - Строка в которой склеяны все значения отмеченных чекбоксов
  */
  function set_array(obj,some_text)
  {
    var text = ""; //начальное значение переменной равно ""
    obj.find('input').each(function(){ //проверка всех поллей ввода в обьекте
      if ($(this).prop("checked")) // если есть отмеченной поле ввода
      {
        text += some_text + $(this).val(); //добавляем значение этого поля в переменую text
        how_many = "some"; //изменяем значение how_many
      }
        
    })
    return text;
  }
  
  /**
  * Функция возвращающая значения отмеченного цвета
  *
  * Данная функция используется для полей с radiobutton (так как в данном проекте 
  только блок Цвета имеет radiobutton, функция названа set_color ;) (Форму обратной связи не считаем, там не используется AJAX))
  она проверяет все радиобатоны обьекта и возвращает значение отмеченного
  *
  * @param {Object} obj - Обьект JQyery, в данном случае div, содержащий поля ввода
  *
  * return {string} text - Строка в которой записано значение радиобатона
  */
  function set_color(obj)
  {
    var text = ""; //начальное значение переменной равно ""
    obj.find('input').each(function(){ //проверка всех поллей ввода в обьекте
      if ($(this).prop("checked")) //если поле отмечено
      {
        text = "&color=" + $(this).val(); //добавляем значение этого поля в переменую text
        how_many = "some"; //изменяем значение how_many
      }
        
    });
    return text;
  }
  
  /**
  * Функция возвращающая переменную из текстового поля
  *
  * Данная функция используется для полей с текстовым вводом (в данном проекте это - поля ввода цен)
  ! Тут я не реализовывал проверку на наличие запрещенных символов !
  *
  * @param {Object} obj - Обьект JQyery, в данном случае div, содержащий поля ввода
  * @param {string} some_text - Строка содержащая текст названия переменной в запросе 
  *
  * return {string} text - Строка в которой склеяны все значения отмеченных чекбоксов
  */
  function set_text(obj,some_text)
  {
    var text = ""; //начальное значение переменной равно ""
    if (obj.val()!= '') // Если в поле введено что-нибудь
    {
      text = some_text + obj.val(); //добавляем значение этого поля в переменую text
      how_many = "some"; //изменяем значение how_many
    }
      
    return text;
  }
  
});
