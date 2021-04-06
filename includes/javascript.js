function VALIDATE()
{
    this.IS_VALIDATE_EMAIL = (STRING) =>
    {
        if(STRING.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z]+.com/g))
            return false;
        else
            alert('The email is not correct!'); 
            window.open("index.php",'_self');
            return true;
    }
    
    this.IS_VALIDATE_STRING = (STRING) =>
    {
        if(STRING.match(/^[a-zA-Z]+$/g) && this.STRING_CONTAINS_NUM(STRING))
            return false;
        else
            return true;
    }
    this.IS_VALIDATE_CNIC = (STRING) =>
    {
        if(STRING.match(/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}/g))
            return false;
        else
            return true;
    }
    this.VALIDATE_LENGTH = (VALUE, LENGTH) =>
    {
        if(VALUE.length > LENGTH)
            return false;
        else
            return true;
    }
    this.IS_VALIDATE_FORMAT = (STRING) =>
    {
        if(STRING.match(/^[A-Z]{3}-[0-9+]{4}/g))
            return false;
        else
            return true;
    }
    this.IS_VALIDATE_ADDRESS = (STRING) =>
    {
        if(STRING.match(/^[a-zA-Z]/g))
            return false;
        else
            return true;
    }
    this.IS_VALIDATE_CONTACT = (STRING) =>
    {
        if(STRING.match(/^[0-9+]{4}-[0-9+]{7}/g))
            return false;
        else
            return true;
    }
    this.STRING_CONTAINS_NUM = (STRING) =>
    {
        if(STRING.match(/^[0-9]+$/g))
            return false;
        else
            return true;
    }
    this.GET_FIELD_VAL = (ID) =>
    {
        return document.getElementById(ID).value;
    }
    this.GET_ID = (ID) =>
    {
        return document.getElementById(ID);
    }
    this.GET_CLASS = (NAME, INDEX) =>
    {
        return document.getElementsByClassName(NAME)[INDEX];
    }
}

function SEARCH_CNIC(ELEM)
    {
        if(ELEM.value == "")
            {
                document.getElementsByClassName('view')[0].innerHTML = "";
                return;
            }
            
        let REQUEST = new XMLHttpRequest();
        REQUEST.onreadystatechange = function()
        {
            if(REQUEST.readyState == 4)
                {
                    document.getElementsByClassName('view')[0].innerHTML = REQUEST.responseText;
                }
        }
        REQUEST.open('GET', './search.php?CNIC='+ELEM.value, true);
        REQUEST.send(null);
        
    }


function SOFTWARE_CONSTRUCTION()
{
    this._VALIDATE_FIELD_EMAIL = (ELEM) =>
    {
         let LABEL = ELEM.nextElementSibling;
          let FIELD_VAL = ELEM.value;
          if(_VALIDATE.IS_VALIDATE_EMAIL(FIELD_VAL))
            LABEL.style.color = 'red';             
          else
            LABEL.style.color = 'green';
    }
    this._VALIDATE_FIELD_STRING = (ELEM) =>
    {
         let LABEL = ELEM.nextElementSibling;
          let FIELD_VAL = ELEM.value;
          if(_VALIDATE.IS_VALIDATE_STRING(FIELD_VAL))
            LABEL.style.color = 'red';             
          else
            LABEL.style.color = 'green';
    }
    this._VALIDATE_FIELD_CNIC = (ELEM) =>
    {
         let LABEL = ELEM.nextElementSibling;
          let FIELD_VAL = ELEM.value;
        if(_VALIDATE.IS_VALIDATE_CNIC(FIELD_VAL))
            LABEL.style.color = 'red';             
          else
            LABEL.style.color = 'green';
    }
    this._VALIDATE_FIELD_PASSWORD = (ELEM) =>
    {
         let LABEL = ELEM.nextElementSibling;
          let FIELD_VAL = ELEM.value;
        if(_VALIDATE.VALIDATE_LENGTH(FIELD_VAL,7))
            LABEL.style.color = 'red';             
          else
            LABEL.style.color = 'green';
    }
    this._VALIDATE_FIELD_FORMAT = (ELEM) =>
    {
         let LABEL = ELEM.nextElementSibling;
          let FIELD_VAL = ELEM.value;
        if(_VALIDATE.IS_VALIDATE_FORMAT(FIELD_VAL))
            LABEL.style.color = 'red';             
          else
            LABEL.style.color = 'green';
    }
    this._VALIDATE_FIELD_ADDRESS = (ELEM) =>
    {
         let LABEL = ELEM.nextElementSibling;
          let FIELD_VAL = ELEM.value;
        if(_VALIDATE.IS_VALIDATE_ADDRESS(FIELD_VAL))
            LABEL.style.color = 'red';             
          else
            LABEL.style.color = 'green';
    }
    this._VALIDATE_FIELD_CONTACT = (ELEM) =>
    {
         let LABEL = ELEM.nextElementSibling;
          let FIELD_VAL = ELEM.value;
        if(_VALIDATE.IS_VALIDATE_CONTACT(FIELD_VAL))
            LABEL.style.color = 'red';             
          else
            LABEL.style.color = 'green';
    }
    
    this._VALIDATE_FIELD_MONEY = (ELEM) =>
    {
        if(_VALIDATE.STRING_CONTAINS_NUM(FIELD_VAL))
            LABEL.style.color = 'red';             
          else
            LABEL.style.color = 'green';
    }
    
    
    
}
let SC = new SOFTWARE_CONSTRUCTION();
let _VALIDATE = new VALIDATE();
