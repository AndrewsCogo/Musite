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
                    <a class="home" href="?">IN�CIO</a> &gt; <strong>NOT�CIAS</strong>
                </div>
            </div>
            <!-- //Location & Sub Title -->

            <!-- Content --> 
            
            <div class="sub_wrap">
                <div id="etc">
                    <div class="legend" style="margin-bottom: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Not�cia:</span></h3>
                          <div style="margin-bottom: 8px; margin-top: 10px;">
                            {#ResultNotices} 
                          </div>
                    </div>
                    <div class="legend" style="margin-bottom: 25px;">
                      <h3 class="legend-title"><span style="font-size: 13px;">Coment�rios:</span></h3>
                          <div style="margin-bottom: 8px; margin-top: 10px;">
                            <div id="commentSelectReturn"></div>
                            <script>
                                function loadComments() { 
                                    Verify('?page=ajax&require=noticeselectcomments&idNotice=<?=$_GET['id'];?>', 'commentSelectReturn', 'get');
                                } 
                                loadComments();
                            </script>
                            <div class="quadros" style="color: black;">
                                Deixe seu coment�rio sobre essa not�cia:<br />
                                <textarea id="comment" style="width: 100%; height: 80px;"></textarea>
                                <input type="button" value="Postar coment�rio" class="button" onclick="javascript: Verify('?page=ajax&require=noticecomment&idNotice=<?=$_GET['id'];?>&comment='+encodeURI(document.getElementById('comment').value), 'commentReturn', 'get');" />
                                <br /><div id="commentReturn"></div>
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