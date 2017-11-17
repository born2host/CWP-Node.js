<?php
        if (isset($_POST['installNode'])) {
                $setup = null;
                $setup = $_POST['setup'];
                $command = "curl --silent --location https://rpm.nodesource.com/setup_".$setup.".x | sudo bash - && yum -y install gcc-c++ make && yum -y install nodejs";
                echo '<pre>';
                echo shell_exec($command);
                echo '</pre>';
        }
?>
<pre>
<center><h3>Install Node.js on your server</h3></center>
</pre>
<pre>
<center>
        <div class="panel-body" style="padding-bottom:0;">
                <form method="post">
                        <table cellpadding="5" border="0">
                                <tr>
                                        <td align="right">Version:</td><td align="left"><select style="width: 100px;" name="setup"><option value="6">Node.js v6</option><option value="8">Node.js v8</option></select></td>
                                </tr>
                                <tr>
                                        <td></td><td align="center"><button name="installNode">Install Node.js</button></td>
                                </tr>
                        </table>
                </form>
				<center>Script by <a href="https://www.born2host.com" target="_blank">Born 2 Host</a></center>
        </div>
</center>
</pre>
