<!-- <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                    <td align="center">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td>
                                    <a href="{{ $url }}" class="button button-{{ $color ?? 'primary' }}" target="_blank">{{ $slot }}</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table> -->


<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                        <tbody><tr>
                          <td align="center" bgcolor="#043768" role="presentation" style="border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background: unset" valign="middle">
                            <a class="dss"  href="{{ $url }}" style="display: inline-block; font-family: Poppins, Helvetica, Arial, sans-serif;  border-radius: 5px;-webkit-border-radius: 5px;-moz-border-radius: 5px;-ms-border-radius: 5px;-o-border-radius: 5px;background-color: #cca354;box-shadow: 0px 10px 20px 0px rgb(0 0 0 / 15%);-webkit-transition: all 0.3s;-o-transition: all 0.3s;transition: all 0.3s;color: #000000;text-decoration: none; padding: 12px 35px;" target="_blank"> {{ $slot }} </a> 
                          </td>
                        </tr>
                      </tbody></table>
   <!--  padding: 12px 35px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    background-color: #cca354;
    box-shadow: 0px 10px 20px 0px rgb(0 0 0 / 15%);
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    color: #000000;

     font-size: 18px; font-weight: normal; line-height: 30px; margin: 0; text-decoration: none; text-transform: none; padding: 10px 25px; mso-padding-alt: 0px; border-radius: 3px; -->