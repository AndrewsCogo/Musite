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
                            
                    <h1 style="margin-top: 20px;">Ba&uacute; virtual</h1>
                        
                    <div id="etc">
                        <table>
                        <tr>
                            <td style="margin: 0px; padding: 0px; background-color: transparent;">
                            <div class="vaultBox">
                                <div id="vaultName">Ba&uacute; atual no jogo</div>
                                <ul id="itemsVaultGame">
                                    {#liItemsVaultGame}
                                </ul>
                            </div>
                            </td>                                                     
                            <td style="margin: 0px; padding: 0px; width: 100%; background-color: transparent;"></td>
                            <td style="margin: 0px; padding: 0px; background-color: transparent;">
                            <div class="vaultBox">
                                <div id="vaultName">Ba&uacute; virtual</div>
                                <ul id="itemsVaultVirtual">
                                    {#liItemsVaultVirtual}
                                </ul>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="background-color: transparent;">
                                <div id="detailsVault"></div>
                            </td>
                        </tr>
                        </table>
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