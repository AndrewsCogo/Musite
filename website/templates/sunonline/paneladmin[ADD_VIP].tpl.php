{#INCLUDE:header} 

        <!-- Body -->
        <div id="subbody">

        <!-- Left Wrap --> 
            <!-- Body Left -->
            {#INCLUDE:menuLeft}
            <!-- //Body Left --> 
        <!-- //Left Wrap -->

        <!-- Right Wrap -->
        <div id="subright">
                                             
            <!-- Location & Sub Title -->
            <div class="locationtitle">
                <div class="location">
                    <a class="home" href="?">IN�CIO</a> &gt; <strong>PAINEL DO ADMIN</strong>
                </div>
                <h3 class="subtitle">Painel do admin</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelAdmin} 
                            
                    <h1 style="margin-top: 20px;">Adcionar Vips</h1>
                    
                    <div class="legend" style="margin-top: 25px; padding: 10px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Preencha os dados abaixo:</span></h3>
                          <form action="?page=paneladmin&amp;option=ADD_VIP&amp;Write=true" method="post">
                                <em>Login:</em><br /><input name="account" type="text" class="inputbox" value="" /> <br />
                                <em>Plano:</em><br /><select name="flat" class="inputbox"><option value="1">{#VIP_NAME_1}</option><option value="2">{#VIP_NAME_2}</option><option value="3">{#VIP_NAME_3}</option><option value="4">{#VIP_NAME_4}</option><option value="5">{#VIP_NAME_5}</option></select> <br />
                                <em>Dias:</em><br /><input name="days" type="text" class="inputbox" value="0" /> dias.<br />
                                <input type="submit" value="Adicionar." class="button" style="margin-top: 10px;" />
                          </form>
                         <div class="quadrosOut">
                            {#RESULTTPL}
                         </div>
                    </div>
                            
                </div>           
            </div>
            <!-- //Content -->

        </div>
        <!-- //Right Wrap -->
               
    </div>     
    <!-- //Body -->

     
        <!-- Footer -->
                          
<div id="subbottomPanel"></div>
{#INCLUDE:footer}
