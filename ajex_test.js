


function postcodelookup($postcode)
{    
        $.ajax(
        {
            type: "GET",
            url: "postcodecall.php",
            data:{postcode: $('#postcode').val()},
            dataType: 'json',
            
            beforeSend :function()
            {       
                $("#postcode_lookup option:gt(0)").remove(); 
                $('#postcode_lookup').find("option:eq(0)").html("Please wait..");
            },
            success: function(data)
            {
                $('#postcode_lookup').show();
                $('#postcode_lookup').find("option:eq(0)").html("Please select your Address");
                alert('Please Select Address from the list - If your address is not here please enter manually. Thanks');
                postcode_dropdown = '';
                $(data).each(function(addressline,fulladdress)
                {      
                fulladdresstrim = fulladdress.replace(/ ,/g, '')
                
               
                postcode_dropdown += '<option value = "' + fulladdress+'"> '+ fulladdresstrim +' </option>';                   
                });             
                $('#postcode_lookup').append(postcode_dropdown);        
            },
            error: function(jqxhr, status, exception) {
                alert('Exception:', exception);
            }

        });
  
}



    $(document).ready(function(){
        $('#postcode_lookup').hide();
        $('#postcode_lookup').on('change',function(){           
            var fulladdress = $(this).val();
            var addressline = fulladdress.split(",");
                $('#addressline1').val(addressline[0]);
                $('#addressline2').val(addressline[1]);
                $('#addressline3').val(addressline[2]);
                $('#town').val(addressline[5]);
                $('#county').val(addressline[6]);
            
        });
    });


