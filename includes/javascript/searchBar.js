function toggleSearchBar(x) {
                    x.classList.toggle("searchAndClose");
                    
            }    
            
    // show and hide the search box.        
function showSearchField() {
    var x = document.getElementById("searchField");
    if(x.style.width== "93%") {
        x.style.width= '0%';
        x.style.transform= "translate(-70px)";   
    }
    else {
        x.style.width='93%';
        x.style.transform= "translate(0px)";
        x.focus();   
    }
	var y = document.getElementById('topOverlay');
		if(y.style.height=="100%") {
		   	y.style.height='0';
			$('body,html').removeClass('hideOverFlow');
		   }
		else {
			y.style.height= '100%';
			$('body,html').addClass('hideOverFlow');
		}
}

// focus the search bar, when the search button is pressed.
function applyFocus() { 
          document.getElementById("search").focus();
                  
    }

// clear the focus when the close button is pressed.
function clearFocus() {
          document.getElementById('search').blur();
    }

// For clearing search field when when the close button is pressed.
 function clearField() {
            document.getElementById("search").value="";
                $('#output').html('');
    }

// For searching databse, if the keyword matches result will show otherwise no result will show. 
            
function searchDatabase() {        
var search = $('#search').val();
    if($.trim(search.length)==0) {
        $('#output').html(''); 
    }
    else {
        $.post('/everythingaboutanything/searchBar/searchResult.php', {'search': search}, function(data) {
            $('#output').html(data);    
        })      
    }    
}
$('body,html').click(function(e) {
    $('#output').html(''); 
});