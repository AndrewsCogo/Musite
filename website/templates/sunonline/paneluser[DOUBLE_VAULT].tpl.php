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
                    <a class="home" href="?">IN�CIO</a> &gt; <strong>PAINEL DO USU�RIO</strong>
                </div>
                <h3 class="subtitle">Painel do usu�rio</h3>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content -->
            
            
            
            <div class="sub_wrap">
                <div id="etc">
                    {#INCLUDE:menuPanelUser} 
                            
                    <h1 style="margin-top: 20px;">Bau Duplo</h1>

                    <div id="etc">
                        <div style="margin-top: 16px; margin-bottom: 16px; padding-left: 5px;" id="classe_change">
                               {#RespostWrite}
                        </div>
                        
                        <div id="etc">
                            <div class="qdestaques2">Aten��o, usando essa op��o voc� mudar� o seu bau para o alternativo.<br />Para desfazer essa a��o apenas mude novamente.</div>
                            <div style="padding-left: 10px; margin-top: 12px;">
                            <form action="?page=paneluser&amp;option=DOUBLE_VAULT&amp;Write=true" method="post">
                            <em>Minha senha:</em><br /><input class="inputbox" name='userPwd' type='password' maxlength='10' /><br />
                            <input type='submit' value='Alterar Bau' class='button' style="margin-top: 6px;" /><br />
                            </form>
                            </div>
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