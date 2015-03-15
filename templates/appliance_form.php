<div class="container" style="position:relative; top: 130px; z-index:0;">
<div id="header">
    <h1>CS50 Appliance 19</h1>               
<div id="toc" class="toc2">
    <div id="toctitle">Table of Contents</div>
    <ul class="sectlevel1">
<li><a href="#notice">NOTICE</a></li>
<li><a href="#cheatsheet">Cheatsheet</a></li>
<li><a href="#notice">Notice</a></li>
<li><a href="#instructions">Instructions</a></li>
<li>
<ul class="sectlevel2">
<li><a href="#how_to_install_appliance">How to Install Appliance</a></li>
<li><a href="#how_to_update_appliance">How to Update Appliance</a></li>
<li><a href="#how_to_use_appliance">How to Use Appliance</a></li>
<li>
<ul class="sectlevel3">
<li><a href="#how_to_change_name">How to Change Name</a></li>
<li><a href="#how_to_change_password">How to Change Password</a></li>
<li><a href="#how_to_change_language">How to Change Language</a></li>
<li><a href="#how_to_change_keyboard_layout">How to Change Keyboard Layout</a></li>
<li><a href="#how_to_change_time_zone">How to Change Time Zone</a></li>
<li><a href="#how_to_open_a_terminal">How to Open a Terminal</a></li>
<li><a href="#how_to_ssh_to_appliance">How to SSH to Appliance</a></li>
<li><a href="#how_to_assign_appliance_a_static_ip_address">How to Assign Appliance a Static IP Address</a></li>
<li><a href="#how_to_change_resolution">How to Change Resolution</a></li>
<li><a href="#how_to_change_volume">How to Change Volume</a></li>
<li><a href="#how_to_enter_exit_fullscreen_mode">How to Enter/Exit Fullscreen Mode</a></li>
<li><a href="#how_to_use_phpmyadmin">How to Use phpMyAdmin</a></li>
<li><a href="#how_to_restore_snapshots">How to Restore Snapshots</a></li>
<li><a href="#how_to_enable_dropbox">How to Enable Dropbox</a></li>
<li>
<ul class="sectlevel4">
<li><a href="#how_to_prevent_dropbox_from_synching_personal_files_em_into_em_the_appliance">How to Prevent Dropbox from Synching Personal Files <em>into</em> the Appliance</a></li>
</ul>
</li>
<li><a href="#how_transfer_files_between_appliance_and_your_computer">How to Transfer Files between Appliance and Your Computer</a></li>
<li>
<ul class="sectlevel4">
<li><a href="#windows">Windows</a></li>
<li><a href="#mac_os">Mac OS</a></li>
<li><a href="#linux">Linux</a></li>
</ul>
</li>
<li><a href="#how_to_access_appliance_from_another_computer">How to Access Appliance from Another Computer</a></li>
<li><a href="#how_to_take_a_screenshot">How to Take a Screenshot</a></li>
<li><a href="#how_to_share_control_of_your_screen">How to Share Control of Your Screen</a></li>
<li><a href="#how_to_disable_automatic_login">How to Disable Automatic Login</a></li>
<li><a href="#how_to_log_out_of_appliance">How to Log Out of Appliance</a></li>
<li><a href="#how_to_restart_appliance">How to Restart Appliance</a></li>
<li><a href="#how_to_shut_down_appliance">How to Shut Down Appliance</a></li>
<li><a href="#how_to_configure_appliance_for_a_proxy_server">How to Configure Appliance for a Proxy Server</a></li>
</ul>
</li>
<li><a href="#how_to_run_programs_from_lectures">How to Run Programs from Lectures</a></li>
<li><a href="#how_to_do_problem_sets">How to Do Problem Sets</a></li>
</ul>
</li>
<li><a href="#accessibility">Accessibility</a></li>
<li><a href="#forget_a_password">Forget a password?</a></li>
<li>
<ul class="sectlevel2">
<li><a href="#i_changed_and_forgot_john_harvard_s_password">I changed and forgot John Harvard’s password</a></li>
<li><a href="#i_forgot_john_harvard_s_mysql_password">I forgot John Harvard’s MySQL password</a></li>
</ul>
</li>
<li><a href="#Changelog">Changelog</a></li>
<li><a href="#known_issues">Known Issues</a></li>
<li><a href="#future_work">Future Work</a></li>
<li><a href="#acknowledgements">Acknowledgements</a></li>
</ul>
                    </div>
                
            </div>
        

        <div id="content">
            <div class="sect1">
<h2 id="notice">NOTICE</h2>
<div class="sectionbody">
<div class="paragraph">
<p><strong>This HOWTO is for version 19 of the CS50 Appliance.</strong></p>
</div>
<div class="ulist">
<ul>
<li>
<p><strong>If taking CS50x, you should use this version of the appliance.</strong></p>
</li>
<li>
<p><strong>If following Fall 2013 of CS50 (or CSCI E-50), you should use this version of the appliance.</strong></p>
</li>
<li>
<p><strong>If following Fall 2012 of CS50 (or CSCI E-52), you should use <a href="../17">version 17</a> of the appliance.</strong></p>
</li>
<li>
<p><strong>If following Summer 2012 of CSCI S-75, you should use <a href="../17">version 17</a> of the appliance.</strong></p>
</li>
<li>
<p><strong>If following Spring 2012 of CS1, CS51, or CS164, you should use <a href="../3">version 3</a> of the appliance.</strong></p>
</li>
<li>
<p><strong>If following <a href="https://www.cs50.net/">Fall 2011</a> of CS50, you should use <a href="../2.3">version 2.3</a> of the appliance.</strong></p>
</li>
<li>
<p><strong>If following <a href="http://cs50.tv/2010/fall/">Fall 2010</a> of CS50, you should use <a href="../2.1">version 2.1</a> of the appliance.</strong></p>
</li>
<li>
<p><strong>If following <a href="http://cs50.tv/2009/fall/">Fall 2009</a> of CS50, you should use <a href="../1.4">version 1.4</a> instead.</strong></p>
</li>
</ul>
</div>
<div class="paragraph">
<p>The CS50 Appliance is a
<a href="http://en.wikipedia.org/wiki/Virtual_machine">virtual machine</a> (VM) that
lets you "take" CS50 (and other courses!), even if you’re not a student
at Harvard.</p>
</div>
<div class="paragraph">
<p>It’s based on
<a href="http://en.wikipedia.org/wiki/Fedora_(operating_system)">Fedora</a>, a
<a href="http://en.wikipedia.org/wiki/Linux">Linux</a>-based
<a href="http://en.wikipedia.org/wiki/Operating_system">operating system</a>. It’s an
<a href="http://en.wikipedia.org/wiki/Computer_appliance">appliance</a> in the sense
that we’ve preconfigured this VM for a specific purpose: CS50!</p>
</div>
<div class="paragraph">
<p>In other words, even if you’re not a student in CS50, you can still play
along at home. The CS50 Appliance will let you compile source code from
<a href="https://www.cs50.net/lectures/">lectures</a> and implement
<a href="https://cs50.tv/#l=psets/">problem sets</a> without having to figure out how
to configure <a href="http://en.wikipedia.org/wiki/Clang">clang</a>, etc. yourself.
Moreover, the CS50 Appliance lets you run Linux inside of a window on
your own computer, even if you’re already running (some other version
of) Linux, Mac OS, Solaris, or Windows!</p>
</div>
<div class="paragraph">
<p>Incidentally, the appliance is always work in progress, so please
forgive any bugs!</p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="cheatsheet">Cheatsheet</h2>
<div class="sectionbody">
<div class="paragraph">
<p>See <a href="#instructions">instructions</a> for much more detail.</p>
</div>
<table class="tableblock frame-all grid-all" style="width:100%; ">
<colgroup>
<col style="width:%;">
<col style="width:%;"> 
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Your Name</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">John Harvard</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Your Username</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">jharvard</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Your Password</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">crimson</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Appliance’s IP Address</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">a number of the form <strong>w.x.y.z</strong>, which can be found in the appliance’s bottom-right corner</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Appliance’s Version</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">a number of the form <strong>19-#</strong>, which can be found in the appliance’s bottom-right corner</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Your MySQL Username</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">jharvard</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>Your MySQL Password</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">crimson</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><strong>phpMyAdmin</strong></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock"><a href="http://localhost/phpMyAdmin/">http://localhost/phpMyAdmin/</a> from within the appliance
</p><p class="tableblock"><a href="http://w.x.y.z/phpMyAdmin/">http://w.x.y.z/phpMyAdmin/</a> from your own computer</p></td>
</tr>
</tbody>
</table>

<div class="paragraph">
<p><strong>In version 19 of the appliance, the superuser account (i.e., root) is
locked (i.e., disabled). But John Harvard has "sudo" (i.e.,
administrative) privileges.</strong></p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="notice">Notice</h2>
<div class="sectionbody">
<div class="paragraph">
<p>For research purposes, the CS50 Appliance is designed to log:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>command-line commands (e.g., <code>ls</code>, <code>make hello</code>, etc.);</p>
</li>
<li>
<p>the output of programs like <code>clang</code>, <code>check50</code>, <code>gdb</code>, <code>style50</code>, etc.;</p>
</li>
<li>
<p><code>gdb</code> commands; and</p>
</li>
<li>
<p>source code that you create and/or save inside of the appliance. Those logs are then periodically uploaded to CS50’s servers.</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>Among CS50’s overarching research goals are to understand better how students code, how students respond to error messages, and how students progress from non-working to working code. None of the data that’s logged is used to compute grades.</p>
</div>
<div class="paragraph">
<p>The CS50 Appliance does not (and cannot) log any activities or files on your own Mac or PC (outside of the CS50 Appliance).  It can only log activity <strong>inside</strong> of the CS50 Appliance (i.e., inside of its own window). Even so, you may disable the uploading of logs to CS50’s servers if you would like to opt out of this research.  Simply run <code>no50</code> in a terminal window to opt out.</p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="instructions">Instructions</h2>
<div class="sectionbody">
<div class="sect2">
<h3 id="how_to_install_appliance">How to Install Appliance</h3>
<div class="paragraph">
<p>In order to install the CS50 Appliance, you first need to install a
<a href="http://en.wikipedia.org/wiki/Hypervisor">hypervisor</a>, which is a program
that will let you run
<a href="http://en.wikipedia.org/wiki/Virtual_machine">virtual machines</a> on your
own computer, whether you run Mac OS, Windows, or Linux.</p>
</div>
<div class="ulist">
<ul>
<li>
<p>If you have a <strong>Mac</strong>, we recommend that you follow <a href="fusion/">these instructions for VMware Fusion</a>.</p>
</li>
<li>
<p>If you have a <strong>PC running Windows</strong>, we recommend that you follow <a href="player/">these instructions for VMware Player</a>.</p>
</li>
<li>
<p>If you have a <strong>PC running Linux</strong>, we recommend that you follow <a href="player/">these instructions for VMware Player</a>.</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>Alternatively (and particularly if you run into trouble with VMware Fusion or VMware Player), you can follow <a href="virtualbox/">these instructions for VirtualBox</a>.</p>
</div>
<div class="paragraph">
<p>Once installed, it’s not uncommon for the appliance to take a minute or
so to boot. But if, once at John Harvard’s desktop, the appliance still
feels unbearably slow, you might need to enable
<a href="../../Hardware_Virtualization">hardware virtualization</a> on your computer
if it’s a PC running Windows or Linux. (Hardware virtualization should
be enabled by default on any Intel-based Mac manufactured in the past
few years.) Even with hardware virtualization enabled, though, virtual
machines might still feel slow if your computer is a few years old, has
a CPU that’s only 1GHz or so, or has only 1GB or so of RAM.</p>
</div>
</div>
<div class="sect2">
<h3 id="how_to_update_appliance">How to Update Appliance</h3>
<div class="paragraph">
<p>To determine which version of the appliance you have, simply
look in the appliance’s bottom-right corner, where
you should see <strong>19-</strong> in boldface, where <strong></strong> is a number. Alternatively, you can
<a href="#how_to_open_a_terminal">open a terminal</a> and execute</p>
</div>
<div class="paragraph">
<p><code>appliance50 -v</code></p>
</div>
<div class="paragraph">
<p>which should report <code>19-#</code> as well.</p>
</div>
<div class="paragraph">
<p>To ensure you have the latest version of the appliance, you can update yourse by
<a href="#how_to_open_a_terminal">opening a terminal</a> and executing:</p>
</div>
<div class="paragraph">
<p><code>update50</code></p>
</div>
<div class="paragraph">
<p>An update may take several minutes.</p>
</div>
<div class="paragraph">
<p><strong>Note that you cannot update from version 1.4, 2.1, 2.3, 3, 17a, or 17 of
the appliance to version 19. You must instead download 19, per the
<a href="#how_to_install_appliance">instructions</a> above.</strong></p>
</div>
</div>
<div class="sect2">
<h3 id="how_to_use_appliance">How to Use Appliance</h3>
<div class="paragraph">
<p>The first thing you should see when the appliance boots up is John
Harvard’s desktop. (Oh, henceforth, you are
<a href="http://en.wikipedia.org/wiki/John_Harvard_(clergyman)">John Harvard</a>.
Your initial password is <strong>crimson</strong>. And here’s
<a href="http://en.wikipedia.org/wiki/File:BostonTrip-91.jpg">what you look
like</a>.) Even though you might think of Linux as having only a
<a href="http://en.wikipedia.org/wiki/Command-line_interface">command-line
interface</a>,
<a href="http://en.wikipedia.org/wiki/Graphical_user_interface">graphical user
interfaces</a> do exist. We’ve installed
<a href="http://en.wikipedia.org/wiki/Xfce">Xfce</a>, one of the most popular, for
you. However, we installed as few programs as possible to keep the
appliance small. You’re welcome to install additional programs via <strong>Menu
&gt; Administration &gt; Software</strong>.</p>
</div>
<div class="sect3">
<h4 id="how_to_change_name">How to Change Name</h4>
<div class="paragraph">
<p>As much as you might not like being called John, <strong>do not try to change
John Harvard’s name or username</strong>. Life will be simpler as John.</p>
</div>
<div class="paragraph">
<p>With that said, if you’d <em>really</em> like to be yourself (or someone else
altogether), you’re welcome to create a new account.
<a href="#how_to_open_a_terminal">Open a terminal</a> and execute</p>
</div>
<div class="listingblock">
<div class="content">
<pre class="CodeRay"><code>sudo adduser --comment "Jane Harvard" --gid students --groups wheel janeh
echo crimson | sudo passwd --stdin janeh
echo -e "crimson\ncrimson" | sudo smbpasswd -a -s janeh</code></pre>
</div>
</div>
<div class="paragraph">
<p>where <code>Jane Harvard</code> is your desired name, <code>crimson</code> is your desired
password, and <code>janeh</code> is your desired username. Be sure not to overlook
the <code>\n</code> in the second command.</p>
</div>
<div class="paragraph">
<p>If you’d also like to start logging into the appliance automatically
under your new identity (instead of John Harvard’s), execute</p>
</div>
<div class="paragraph">
<p><code>sudo nano /etc/gdm/custom.conf</code></p>
</div>
<div class="paragraph">
<p>and change <code>jharvard</code> to your own username. Then hit <strong>ctrl-x</strong>, then <strong>y</strong>,
then <strong>Enter</strong> to save and quit.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_change_password">How to Change Password</h4>
<div class="paragraph">
<p>You can change your password in any of these ways:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Select <strong>Menu &gt; Settings &gt; Password</strong> and follow the on-screen prompts.</p>
</li>
<li>
<p><a href="#how_to_open_a_terminal">Open a terminal</a> and execute:<br></p>
<div class="listingblock">
<div class="content">
<pre>passwd</pre>
</div>
</div>
</li>
</ul>
</div>
<div class="paragraph">
<p>With that said, allow us to suggest that you not change John Harvard’s
password if your own computer is already password-protected. (Life will
be simpler with <strong>crimson</strong>.) The appliance has been configured in such a
way that only someone with access to your computer (e.g., you) can
access the appliance. Even though the appliance can connect to the
Internet, the Internet cannot connect to the appliance.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_change_language">How to Change Language</h4>
<div class="paragraph">
<p><strong>This feature may require Internet access.</strong></p>
</div>
<div class="paragraph">
<p>If English is not your native language, you may want to change the
appliance’s default language. Some things will remain in English, but
you might find yourself more at home nonetheless. Select <strong>Menu &gt;
Administration &gt; Language</strong>, inputting your password if prompted. Select
your preferred language from the list that appears, then click <strong>OK</strong>. If
prompted, click <strong>Import key</strong>. You may need to wait for a bit as the
language is installed. Then <a href="#how_to_restart_appliance">restart the
appliance</a> and log back in.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_change_keyboard_layout">How to Change Keyboard Layout</h4>
<div class="paragraph">
<p>If you have a non-U.S. (or non-standard) keyboard, you may want (or
need!) to change your keyboard’s layout as follows.</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Select <strong>Menu &gt; Settings &gt; Keyboard</strong>.</p>
</li>
<li>
<p>Click <strong>Layout</strong>.</p>
</li>
<li>
<p>Uncheck <strong>Use system defaults</strong>.</p>
</li>
<li>
<p>Leave <strong>Keyboard model</strong> blank unless you have one of the keyboards
listed.</p>
</li>
<li>
<p>Click <strong>Add</strong> down below <strong>Keyboard layout</strong>.</p>
</li>
<li>
<p>Select your keyboard’s layout (and variant, if any).</p>
</li>
<li>
<p>Click <strong>OK</strong>.</p>
</li>
<li>
<p>Ensure that your selection is now highlighted instead of <strong>English
(US)</strong>, then click <strong>Close</strong>.</p>
</li>
</ol>
</div>
</div>
<div class="sect3">
<h4 id="how_to_change_time_zone">How to Change Time Zone</h4>
<div class="paragraph">
<p>If you don’t live in Cambridge, Massachusetts, USA, you may want to
change the appliance’s timezone. Select <strong>Menu &gt; Administration &gt; Date &amp;
Time</strong>. Click the <strong>Time Zone</strong> tab, select the nearest city in your time
zone, then click <strong>OK</strong>, leaving <strong>System clock uses UTC</strong> checked.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_open_a_terminal">How to Open a Terminal</h4>
<div class="paragraph">
<p>You can open a terminal in any of these ways:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Select <strong>Menu &gt; Programming &gt; Terminal</strong> or <strong>Menu &gt; Accessories &gt;
Terminal</strong>. You’ll find yourself in your home directory (<code>~</code>).</p>
</li>
<li>
<p>Click Terminal’s icon (a black square) in the appliance’s bottom-left
corner. You’ll find yourself in your home directory (<code>~</code>).</p>
</li>
<li>
<p>Right-click anywhere on your desktop and select <strong>Open Terminal Here</strong>.
You’ll find yourself in <code>~/Desktop/</code>.</p>
</li>
<li>
<p>Select <strong>Menu &gt; Programming &gt; gedit</strong> or <strong>Menu &gt; Accessories &gt; gedit</strong>.
You’ll find yourself in your home directory (<code>~</code>) in gedit’s bottom
panel.</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>No matter the approach you take, it’s in the terminal window that you’ll
be able to type commands like <code>cd</code>, <code>clang</code>, <code>ls</code>, etc.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_ssh_to_appliance">How to SSH to Appliance</h4>
<div class="paragraph">
<p>If you’d like to SSH to the appliance from your own computer (as with
Terminal on Mac OS or with PuTTY on Windows), you can SSH from your
computer to the appliance’s IP address (which is displayed in the
appliance’s bottom-right corner).</p>
</div>
<div class="paragraph">
<p><strong>Note that, for security’s sake, you can SSH to the appliance as
<code>jharvard</code> but not as <code>root</code>.</strong></p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_assign_appliance_a_static_ip_address">How to Assign Appliance a Static IP Address</h4>
<div class="paragraph">
<p><em>Coming Soon</em></p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_change_resolution">How to Change Resolution</h4>
<div class="paragraph">
<p>You can change the appliance’s resolution (i.e., width and height) in
either of these ways:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Select <strong>Menu &gt; Settings &gt; Display</strong> within the appliance, select a new
value to the right of <strong>Resolution</strong>, then click <strong>Close</strong>.</p>
</li>
<li>
<p>Click and drag the appliance’s bottom-right corner.</p>
</li>
</ul>
</div>
</div>
<div class="sect3">
<h4 id="how_to_change_volume">How to Change Volume</h4>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Select <strong>Menu &gt; Sound &amp; Video &gt; Mixer</strong>.</p>
</li>
<li>
<p>Select <strong>Playback: ES1371 [AudioPCO-97] Analog Stereo (PulseAudio
Mixer)</strong> next to <strong>Sound card</strong>.</p>
</li>
<li>
<p>Click '''Select Controls…".</p>
</li>
<li>
<p>Check <strong>Master</strong> then click <strong>Close</strong>.</p>
</li>
<li>
<p>Drag the sliders upward to increase the audio’s volume.</p>
</li>
<li>
<p>Click <strong>Quit</strong>.</p>
</li>
<li>
<p>Visit <a href="http://www.youtube.com/">http://www.youtube.com/</a> in Chrome to test with a video!</p>
</li>
</ol>
</div>
</div>
<div class="sect3">
<h4 id="how_to_enter_exit_fullscreen_mode">How to Enter/Exit Fullscreen Mode</h4>
<div class="paragraph">
<p>To enter fullscreen mode, select <strong>Switch to Fullscreen</strong> from
VirtualBox’s <strong>Machine</strong> menu while the appliance is running. (This menu
is outside of the appliance, not inside of it.)</p>
</div>
<div class="paragraph">
<p>To exit fullscreen mode, move your cursor to the middle of the bottom of
your screen, at which point a menu should appear. Click the second icon
from the right (which resembles two squares).</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_use_phpmyadmin">How to Use phpMyAdmin</h4>
<div class="paragraph">
<p>You can access phpMyAdmin in either of these ways:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Visit <a href="http://localhost/phpMyAdmin/">http://localhost/phpMyAdmin/</a> or <a href="http://w.x.y.z/phpMyAdmin/">http://w.x.y.z/phpMyAdmin/</a>
(where <strong>w.x.y.z</strong> is the appliance’s IP address, which can be found in
the appliance’s bottom-right corner) using Chrome within the appliance.</p>
</li>
<li>
<p>Visit <a href="http://w.x.y.z/phpMyAdmin/">http://w.x.y.z/phpMyAdmin/</a> (where <strong>w.x.y.z</strong> is the appliance’s
IP address, which can be found in the appliance’s bottom-right corner)
using your own computer’s browser.</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>No matter the approach you take, log in as <strong>jharvard</strong> with a password of
<strong>crimson</strong> if prompted.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_restore_snapshots">How to Restore Snapshots</h4>
<div class="paragraph">
<p>Every 10 minutes, the appliance take "snapshots" of source code in
<code>/home</code> just in case you accidentally delete something. You can also
mitigate accidental deletions by
<a href="#how_to_synchronize_files_with_dropbox">synchronizing with Dropbox</a>
so that you can restore files at <a href="https://www.dropbox.com/">dropbox.com</a>.</p>
</div>
<div class="paragraph">
<p>Suppose that you just deleted <code>~/hello.c</code>. Odds are you’ll find it in
the <code>minutely.0</code> or <code>minutely.1</code> snapshot, depending on the current
time, in which case you can recover it with</p>
</div>
<div class="paragraph">
<p><code>cp /.snapshots/minutely.0/home/jharvard/hello.c ~</code></p>
</div>
<div class="paragraph">
<p>or with</p>
</div>
<div class="paragraph">
<p><code>cp&nbsp;/.snapshots/minutely.1/home/jharvard/hello.c&nbsp;~</code></p>
</div>
<div class="paragraph">
<p>in a <a href="#how_to_open_a_terminal">terminal</a>. If you need to recover an
earlier version, you can go further back in time via <code>minutely.2</code>,
<code>minutely.3</code>, or <code>minutely.4</code>. If you’d instead like to go back an hour
or so, you can start with <code>hourly.0</code>, followed by <code>hourly.1</code>,
<code>hourly.2</code>, and so on. Below are all of the intervals you can try.
Realize that the times only estimates, since the intervals' definitions
depend on the current time.</p>
</div>
<table class="tableblock frame-all grid-all" style="width:100%; ">
<colgroup>
<col style="width:%;">
<col style="width:%;"> 
</colgroup>
<tbody>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>minutely.0</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">10 minutes ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>minutely.1</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">20 minutes ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>minutely.2</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">30 minutes ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>minutely.3</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">40 minutes ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>minutely.4</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">50 minutes ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>hourly.0</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">1 hour ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>hourly.1</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">2 hours ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock">…</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">…</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>hourly.22</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">23 hours ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>daily.0</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">yesterday</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>daily.1</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">2 days ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock">…</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">…</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>daily.5</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">6 days ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>weekly.0</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">1 week ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>weekly.1</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">2 weeks ago</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock">…</p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">…</p></td>
</tr>
<tr>
<td class="tableblock halign-left valign-top"><p class="tableblock"><code>weekly.51</code></p></td>
<td class="tableblock halign-left valign-top"><p class="tableblock">51 weeks ago</p></td>
</tr>
</tbody>
</table>

<div class="paragraph">
<p>To see which intervals are actually available to you, execute:</p>
</div>
<div class="paragraph">
<p><code>ls&nbsp;/.snapshots/</code></p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_enable_dropbox">How to Enable Dropbox</h4>
<div class="paragraph">
<p><strong>This feature requires Internet access.</strong></p>
</div>
<div class="paragraph">
<p>To make it easier to back up files within the appliance automatically as
well as share them with your own computer(s), you can synchronize a
directory in John Harvard’s account with
<a href="http://www.dropbox.com/features">Dropbox</a>. <strong>If taking a course, just take
care to respect the course’s policies on academic honesty.</strong></p>
</div>
<div class="paragraph">
<p>Here’s how to configure the appliance for Dropbox.</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Select <strong>Menu &gt; Dropbox</strong>.</p>
</li>
<li>
<p>You should be prompted to "download the proprietary daemon" (i.e.,
software); click <strong>OK</strong>. The software should proceed to download and
unpack.</p>
</li>
<li>
<p>You should then be prompted to set up Dropbox.</p>
<div class="ulist">
<ul>
<li>
<p>If you don’t already have a Dropbox account, leave <strong>I don’t have a
Dropbox account</strong> checked, then click <strong>Next</strong>. Create your Dropbox as
prompted.</p>
</li>
<li>
<p>If you already have an Dropbox account, check <strong>I already have a
Dropbox account</strong>, then click <strong>OK</strong>. Log in as prompted.</p>
</li>
</ul>
</div>
</li>
<li>
<p>If prompted to upgrade your Dropbox, simply leave <strong>2 GB</strong> checked
(which is free) then click <strong>Next</strong>, unless you want to upgrade to a paid
account.</p>
</li>
<li>
<p>If prompted to <strong>Choose setup type</strong>, leave <strong>Typical</strong> checked, then
click <strong>Install</strong>. If prompted to "merge", click <strong>Merge</strong>.</p>
</li>
<li>
<p>If prompted to take a 5-step tour, click <strong>Skip Tour</strong>; its
screenshots won’t match what you’ll see in the appliance.</p>
</li>
<li>
<p>When informed <strong>That’s it!</strong>, uncheck <strong>Open my Dropbox folder now</strong>,
then click <strong>Finish</strong>. A Dropbox icon should then appear in the
appliance’s bottom-right corner.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p><strong>Only those files and folders that you save in <code>~/Dropbox/</code> will be
synchronized with your Dropbox account.</strong></p>
</div>
<div class="sect4">
<h5 id="how_to_prevent_dropbox_from_synching_personal_files_em_into_em_the_appliance">How to Prevent Dropbox from Synching Personal Files <em>into</em> the Appliance</h5>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Ctrl-click on the Dropbox icon in the appliance’s bottom-right
corner and select <strong>Preferences…</strong>.</p>
</li>
<li>
<p>Click <strong>Advanced</strong>.</p>
</li>
<li>
<p>Click <strong>Selective Sync…</strong>.</p>
</li>
<li>
<p>Uncheck the folders that you don’t want synched into the appliance.</p>
</li>
<li>
<p>Click <strong>Update</strong>.</p>
</li>
</ol>
</div>
</div>
</div>
<div class="sect3">
<h4 id="how_transfer_files_between_appliance_and_your_computer">How to Transfer Files between Appliance and Your Computer</h4>
<div class="paragraph">
<p>If you’d like to
<a href="http://en.wikipedia.org/wiki/SSH_file_transfer_protocol">SFTP</a> to the
appliance from your own computer (as with
<a href="http://cyberduck.ch/">Cyberduck</a> on Mac OS or with
<a href="http://winscp.net/eng/download.php">WinSCP</a> on Windows), you can SFTP
from your computer to <strong>w.x.y.z</strong> (where <strong>w.x.y.z</strong> is the appliance’s IP
address, which can be found in the appliance’s bottom-right corner).</p>
</div>
<div class="paragraph">
<p>Alternatively, you can "mount" John Harvard’s home directory (via a
protocol called <a href="http://en.wikipedia.org/wiki/Server_Message_Block">SMB</a>,
otherwise known as <a href="http://en.wikipedia.org/wiki/CIFS">CIFS</a>) in a window
on your own desktop, to and from which you can drag and drop files.
Here’s how, whether you run Linux, Mac OS, or Windows.</p>
</div>
<div class="sect4">
<h5 id="windows">Windows</h5>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Open any folder on your hard drive.</p>
</li>
<li>
<p>Click the address bar atop the folder’s window and input
<strong>\\w.x.y.z\jharvard</strong> (where <strong>w.x.y.z</strong> is the appliance’s IP address,
which can be found in the appliance’s bottom-right corner), then click
<strong>Enter</strong>.</p>
</li>
<li>
<p>If prompted for your name and password:</p>
<div class="olist loweralpha">
<ol class="loweralpha" type="a">
<li>
<p>Input <strong>jharvard</strong> for <strong>User name</strong>.</p>
</li>
<li>
<p>Input <strong>crimson</strong> for <strong>Password</strong>.</p>
</li>
<li>
<p>Check <strong>Remember my credentials</strong> if you’d like.</p>
</li>
<li>
<p>Click <strong>Connect</strong>.</p>
</li>
</ol>
</div>
</li>
</ol>
</div>
<div class="paragraph">
<p>John Harvard’s home directory should then open in a new window.</p>
</div>
</div>
<div class="sect4">
<h5 id="mac_os">Mac OS</h5>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Select <strong>Connect to Server…</strong> from the Finder’s <strong>Go</strong> menu.</p>
</li>
<li>
<p>Under <strong>Server Address:</strong>, input <strong>smb://w.x.y.z</strong> (where <strong>w.x.y.z</strong> is
the appliance’s IP address, which can be found in the appliance’s
bottom-right corner). (Click the <strong>+</strong> icon if you’d like to add the
appliance to your <strong>Favorite Servers</strong>.) Then click <strong>Connect</strong>.</p>
</li>
<li>
<p>If prompted for your name and password:</p>
<div class="olist loweralpha">
<ol class="loweralpha" type="a">
<li>
<p>Select <strong>Registered User</strong>.</p>
</li>
<li>
<p>Input <strong>jharvard</strong> for <strong>Name</strong>.</p>
</li>
<li>
<p>Input <strong>crimson</strong> for <strong>Password</strong>.</p>
</li>
<li>
<p>Click <strong>Connect</strong>.</p>
</li>
</ol>
</div>
</li>
</ol>
</div>
<div class="paragraph">
<p>John Harvard’s home directory should then open in a new window.</p>
</div>
</div>
<div class="sect4">
<h5 id="linux">Linux</h5>
<div class="paragraph">
<p>GNOME</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Select <strong>Connect to Server…</strong> from the <strong>Places</strong> menu.</p>
</li>
<li>
<p>Input <strong>w.x.y.z</strong> for <strong>Server</strong> (where <strong>w.x.y.z</strong> is the appliance’s IP
address, which can be found in the appliance’s bottom-right corner).</p>
</li>
<li>
<p>Select <strong>Windows share</strong> for <strong>Type</strong>.</p>
</li>
<li>
<p>Input <strong>jharvard</strong> for <strong>Share</strong>.</p>
</li>
<li>
<p>Input <strong>/</strong> for <strong>Folder</strong>.</p>
</li>
<li>
<p>Input <strong>CS50</strong> for <strong>Domain name</strong>.</p>
</li>
<li>
<p>Input <strong>jharvard</strong> for <strong>User name</strong>.</p>
</li>
<li>
<p>Input <strong>crimson</strong> for <strong>Password</strong>.</p>
</li>
<li>
<p>Check <strong>Remember this password</strong> if you’d like.</p>
</li>
<li>
<p>Click <strong>Connect</strong>.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>John Harvard’s home directory should then open in a new window.</p>
</div>
<div class="paragraph">
<p>KDE</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Open Dolphin (as via <strong>Computer &gt; Network</strong>).</p>
</li>
<li>
<p>Select <strong>Network</strong>.</p>
</li>
<li>
<p>Click <strong>Add Network Folder</strong>.</p>
</li>
<li>
<p>Select <strong>Microsoft® Windows® network drive</strong>, then click <strong>Next</strong>.</p>
</li>
<li>
<p>Input <strong>appliance</strong> for <strong>Name</strong>.</p>
</li>
<li>
<p>Input <strong>w.x.y.z</strong> for <strong>Server</strong> (where <strong>w.x.y.z</strong> is the appliance’s IP
address, which can be found in the appliance’s bottom-right corner).</p>
</li>
<li>
<p>Input <strong>jharvard</strong> for <strong>Folder</strong>.</p>
</li>
<li>
<p>Check <strong>Create an icon for this remote folder</strong> if you’d like.</p>
</li>
<li>
<p>Click <strong>Finish</strong>.</p>
</li>
<li>
<p>Input <strong>jharvard</strong> for <strong>Username</strong>.</p>
</li>
<li>
<p>Input <strong>crimson</strong> for <strong>Password</strong>.</p>
</li>
<li>
<p>Check <strong>Remember password</strong> if you’d like.</p>
</li>
<li>
<p>Click <strong>OK</strong>.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>John Harvard’s home directory should then open in a new window.</p>
</div>
<div class="paragraph">
<p>Xfce</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Install <code>gvfs-smb</code> as <code>root</code> (as via <code>sudo</code>) if not installed
already, as with</p>
<div class="listingblock">
<div class="content">
<pre>yum -y install gvfs-smb</pre>
</div>
</div>
<div class="paragraph">
<p>if running CentOS, Fedora, or RedHat or with</p>
</div>
<div class="listingblock">
<div class="content">
<pre>apt-get install gvfs-backends</pre>
</div>
</div>
<div class="paragraph">
<p>if running Debian or Ubuntu.</p>
</div>
</li>
<li>
<p>Launch Thunar (as via <strong>Applications Menu &gt; System &gt; Thunar File
Manager</strong>).</p>
</li>
<li>
<p>Select <strong>Open Location…</strong> from the <strong>Go</strong> menu.</p>
</li>
<li>
<p>Input <strong>smb://w.x.y.z/jharvard/</strong> (where <strong>w.x.y.z</strong> is the appliance’s
IP address, which can be found in the appliance’s bottom-right corner)
for <strong>Location</strong> then click <strong>Open</strong>.</p>
</li>
<li>
<p>Input <strong>jharvard</strong> for <strong>Username</strong>.</p>
</li>
<li>
<p>Input <strong>CS50</strong> for <strong>Domain</strong>.</p>
</li>
<li>
<p>Input <strong>crimson</strong> for <strong>Password</strong>.</p>
</li>
<li>
<p>Check <strong>Remember forever</strong> if you’d like.</p>
</li>
<li>
<p>Click <strong>Connect</strong>.</p>
</li>
</ol>
</div>
</div>
</div>
<div class="sect3">
<h4 id="how_to_access_appliance_from_another_computer">How to Access Appliance from Another Computer</h4>
<div class="paragraph">
<p><strong>This feature is not supported on Harvard’s campus on the "Harvard
University" SSID.</strong> It does work on the "CS50" SSID in Annenberg and
Sanders Theatre, though.</p>
</div>
<div class="paragraph">
<p>By default, you can access the appliance from your own computer via
<strong>w.x.y.z</strong> (where <strong>w.x.y.z</strong> is the appliance’s IP address, which can be
found in the appliance’s bottom-right corner). That IP address only
exists within the confines of your hypervisor, though, so, by default,
it’s <em>not</em> possible to access the appliance from other computers on your
LAN (i.e., home network).</p>
</div>
<div class="paragraph">
<p>However, the appliance also comes with a "bridged" network interface
(<code>eth2</code>) that you can activate manually. So long as your LAN supports
<a href="http://en.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol">DHCP</a>
(which most home networks do), that interface will acquire an IP address
on your LAN, at which point you can access the appliance via HTTP or SSH
via <em>that</em> IP from any computer on your LAN.</p>
</div>
<div class="paragraph">
<p>However, for security’s sake, you will not be able (from any computer
besides your own, on which the appliance is running) to:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>access phpMyAdmin</p>
</li>
<li>
<p>access Webmin</p>
</li>
<li>
<p><a href="#how_to_transfer_files_between_appliance_and_your_computer">mount
John Harvard’s home directory</a> in a window on your desktop</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>You will be able to:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>access John Harvard’s homepage</p>
</li>
<li>
<p>SSH to the appliance</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>Unfortunately, odds are <code>eth2</code> will not work on Harvard’s campus because
of Harvard’s firewall.</p>
</div>
<div class="paragraph">
<p><strong>Before activating <code>eth2</code>, you should first
<a href="#how_to_change_password">change John Harvard’s password</a> to
something only you know for security’s sake.</strong></p>
</div>
<div class="paragraph">
<p>To enable <code>eth2</code> temporarily, <a href="#_how_to_open_a_terminal">open a
terminal</a> and execute:</p>
</div>
<div class="paragraph">
<p><code>sudo&nbsp;ifup&nbsp;eth2</code></p>
</div>
<div class="paragraph">
<p>If your LAN indeed supports DHCP, you should see:</p>
</div>
<div class="paragraph">
<p><code>Determining&nbsp;IP&nbsp;information&nbsp;for&nbsp;eth2...&nbsp;done.</code></p>
</div>
<div class="paragraph">
<p>To find out which IP address was assigned by your LAN to the appliance,
execute</p>
</div>
<div class="paragraph">
<p><code>ifconfig&nbsp;eth2</code></p>
</div>
<div class="paragraph">
<p>and look to the right of <strong>inet addr</strong> (not <strong>inet6 addr</strong>). That’s the
address via which you can accessible the appliance from another computer
on your LAN. Odds are it will start with <strong>192.168.0</strong> or <strong>192.168.1</strong> or
<strong>10.0.1</strong>, though other prefixes are possible.</p>
</div>
<div class="paragraph">
<p>If you would like to enable <code>eth2</code> permanently:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Select <strong>Menu &gt; Administration &gt; Network</strong>.</p>
</li>
<li>
<p>Highlight <strong>eth2</strong> in the window that appears, then click <strong>Edit</strong>.</p>
</li>
<li>
<p>Check <strong>Activate device when computer starts</strong>, then click <strong>OK</strong>.</p>
</li>
<li>
<p>Select <strong>File &gt; Save</strong>, then click <strong>OK</strong>.</p>
</li>
<li>
<p>Select <strong>File &gt; Quit</strong>.</p>
</li>
<li>
<p><a href="#_how_to_restart_appliance">Restart the appliance</a>.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>Just realize that each time the appliance starts, it may be assigned a
different IP address on your LAN via DCHP, so you might need to re-run</p>
</div>
<div class="paragraph">
<p><code>ifconfig&nbsp;eth2</code></p>
</div>
<div class="paragraph">
<p>each time to find out the current address. If your home router supports
"DHCP reservations," know that you can find out the MAC (i.e., Ethernet)
address of <code>eth2</code> by running</p>
</div>
<div class="paragraph">
<p><code>ifconfig&nbsp;eth2</code></p>
</div>
<div class="paragraph">
<p>as well. Look to the right of <strong>HWaddr</strong> for the address. Alternatively,
if you think it’s safe to assign the appliance a static IP address on
your LAN without your home router even knowing, select <strong>Menu &gt;
Administration &gt; Network</strong>, highlight <strong>eth2</strong> in the window that appears,
click <strong>Edit</strong>, select <strong>Statically set IP addresses</strong>, and configure the
interface as you see fit.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_take_a_screenshot">How to Take a Screenshot</h4>
<div class="paragraph">
<p>It’s sometimes helpful to take a screenshot of the appliance so that you
can remember or share something you see on your screen. <strong>If taking a
course, just take care to respect the course’s policies on academic
honesty.</strong></p>
</div>
<div class="paragraph">
<p>To take a screenshot inside of the appliance:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Select <strong>Menu &gt; Accessories &gt; Screenshot</strong>.</p>
</li>
<li>
<p>Check a <strong>Region to capture</strong>.</p>
</li>
<li>
<p>Leave <strong>Capture the mouse pointer</strong> checked unless you’d like to hide
it.</p>
</li>
<li>
<p>Leave <strong>Delay before capturing</strong> at <strong>1</strong>, unless you need more time.</p>
</li>
<li>
<p>Click <strong>OK</strong>.</p>
</li>
<li>
<p>You should then be prompted to decide on an <strong>Action</strong>. Leave <strong>Save</strong>
checked and then click <strong>OK</strong> if you’d like to save the screenshot as a
file; decide on a destination as prompted. You can then share that
screenshot with someone if necessary, as by opening Gmail in Firefox and
sending it as an attachment.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>You can also <a href="#_how_to_share_control_of_your_screen">share control of
your screen</a> if you need someone else to see more than a screenshot.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_share_control_of_your_screen">How to Share Control of Your Screen</h4>
<div class="paragraph">
<p><strong>This feature requires Internet access.</strong></p>
</div>
<div class="paragraph">
<p>So that you can help (and be helped by!) fellow learners on the
Internet, the appliance comes with
<a href="http://www.teamviewer.com/">TeamViewer</a>, which lets you share (control
of) your screen with someone else (a "partner") on the Internet (and
vice versa). <strong>If taking a course, just take care to respect the course’s
policies on academic honesty.</strong></p>
</div>
<div class="paragraph">
<p>To share your screen with some else:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Select <strong>Menu &gt; TeamViewer</strong>. (Click <strong>Accept License Agreement</strong> if
prompted.) A window should appear.</p>
</li>
<li>
<p>Tell your partner <strong>Your ID</strong> and <strong>Password</strong> that you see. Once your
partner inputs those values, your screen should be shared. Though if
your own computer has a firewall, you might first be prompted to "allow
incoming connections" or the like.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>To see someone else’s screen:</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Ask your partner for a <strong>Partner ID</strong> and <strong>Password</strong>.</p>
</li>
<li>
<p>Select <strong>Menu &gt; TeamViewer</strong>. (Click <strong>Accept License Agreement</strong> if
prompted.) A window should appear.</p>
</li>
<li>
<p>Input the <strong>Partner ID</strong> into that window, then click <strong>Connect to
partner</strong>.</p>
</li>
<li>
<p>When prompted, input the <strong>Password</strong>, at which point you should see
your partner’s screen.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>If you would like to connect to someone else’s appliance from your own
computer (rather than from your own appliance) or from a mobile device,
you can download TeamViewer for free for Android, iOS, Linux, Mac OS, or
Windows from <a href="http://www.teamviewer.com/en/download/">http://www.teamviewer.com/en/download/</a>.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_disable_automatic_login">How to Disable Automatic Login</h4>
<div class="paragraph">
<p>By default, the appliance logs you in as John Harvard. To disable
automatic login, <a href="#_how_to_open_a_terminal">open a terminal</a> and
execute:</p>
</div>
<div class="paragraph">
<p><code>sudo&nbsp;rm&nbsp;-f&nbsp;/etc/gdm/custom.conf</code></p>
</div>
<div class="paragraph">
<p>Then <a href="#_how_to_restart_appliance">restart the appliance</a>. You should
now see a login prompt instead of John Harvard’s desktop.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_log_out_of_appliance">How to Log Out of Appliance</h4>
<div class="paragraph">
<p>To log out of the appliance, click
<span class="image"><img src="./Exit.png" alt="Exit.png" title="image"></span> in the appliance’s bottom-right
corner, then click <strong>Log Out</strong>.</p>
</div>
</div>
<div class="sect3">
<h4 id="how_to_restart_appliance">How to Restart Appliance</h4>
<div class="paragraph">
<p>You can restart the appliance in either of these ways:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Click <span class="image"><img src="./Exit.png" alt="Exit.png" title="image"></span> in the appliance’s
bottom-right corner, then click <strong>Restart</strong>.</p>
</li>
<li>
<p><a href="#how_to_open_a_terminal">Open a terminal</a> and execute the below,
inputting your password if prompted:</p>
<div class="listingblock">
<div class="content">
<pre>reboot</pre>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="sect3">
<h4 id="how_to_shut_down_appliance">How to Shut Down Appliance</h4>
<div class="paragraph">
<p>You can shut down the appliance in either of these ways:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Click <span class="image"><img src="./Exit.png" alt="Exit.png" title="image"></span> in the appliance’s
bottom-right corner, then click <strong>Shut Down</strong>.</p>
</li>
<li>
<p><a href="#how_to_open_a_terminal">Open a terminal</a> and execute the below,
inputting your password if prompted:</p>
<div class="listingblock">
<div class="content">
<pre>sudo shutdown</pre>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="sect3">
<h4 id="how_to_configure_appliance_for_a_proxy_server">How to Configure Appliance for a Proxy Server</h4>
<div class="paragraph">
<p>If your own computer sits behind an HTTP proxy server, you might need to
configure the appliance to route HTTP traffic through that proxy as
well. Here’s how.</p>
</div>
<div class="olist arabic">
<ol class="arabic">
<li>
<p><a href="#how_to_open_a_terminal">Open a terminal</a> and execute the below:</p>
<div class="listingblock">
<div class="content">
<pre>sudo gedit /etc/profile.d/proxy.sh</pre>
</div>
</div>
</li>
<li>
<p>Add the following line to that (otherwise empty) file, where
<code>example.com</code> is the address of your proxy server and <code>80</code> is its port
number:</p>
<div class="listingblock">
<div class="content">
<pre>export http_proxy=http://example.com:80/</pre>
</div>
</div>
</li>
<li>
<p>Select <strong>File &gt; Quit</strong>, and click <strong>Save</strong> when prompted.</p>
</li>
<li>
<p>Execute</p>
<div class="listingblock">
<div class="content">
<pre>sudo chmod 644 /etc/profile.d/proxy.sh</pre>
</div>
</div>
<div class="paragraph">
<p>in the terminal.</p>
</div>
</li>
<li>
<p><a href="#how_to_restart_appliance">Restart the appliance</a>.</p>
</li>
</ol>
</div>
</div>
</div>
<div class="sect2">
<h3 id="how_to_run_programs_from_lectures">How to Run Programs from Lectures</h3>
<div class="paragraph">
<p>See <a href="../../Fall_2012">Fall 2012’s HOWTO</a>.</p>
</div>
</div>
<div class="sect2">
<h3 id="how_to_do_problem_sets">How to Do Problem Sets</h3>
<div class="paragraph">
<p>See <a href="../../Fall_2012">Fall 2012’s HOWTO</a>.</p>
</div>
</div>
</div>
</div>
<div class="sect1">
<h2 id="accessibility">Accessibility</h2>
<div class="sectionbody">
<div class="paragraph">
<p>The CS50 Appliance comes pre-configured with
<a href="http://live.gnome.org/Orca">Orca</a>, a screen reader. To enable Orca,
select <strong>Menu &gt; Accessories &gt; Orca</strong>.</p>
</div>
<div class="paragraph">
<p>Note that Orca does work with:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Chrome</p>
</li>
<li>
<p>gedit (but not its built-in terminal window)</p>
</li>
<li>
<p>NetBeans</p>
</li>
<li>
<p>Xfce’s menu (in the appliance’s bottom-left corner)</p>
</li>
<li>
<p>Xfce’s panel (along the bottom of the appliance’s screen)</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>But Orca does not work with:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>gedit’s built-in terminal window</p>
</li>
<li>
<p>Terminal</p>
</li>
<li>
<p>Thunar, the appliance’s file manager (via which you can open the
<strong>Home</strong> and <strong>File System</strong> icons on the appliance’s desktop)</p>
</li>
</ul>
</div>
<div class="paragraph">
<p>However, if you have a screen reader installed on your own computer, you
needn’t rely on Orca alone. Instead, you can leverage your own screen
reader for navigation by <a href="#how_to_ssh_to_appliance">SSHing to the
appliance</a> from your computer and by
<a href="#how_to_transfer_files_between_appliance_and_your_computer">mounting
John Harvard’s home directory</a> on your own computer.</p>
</div>
<div class="paragraph">
<p><strong>If you have suggestions on how to improve the appliance’s
accessibility, please let <a href="mailto:sysadmins@cs50.net">sysadmins@cs50.net</a> know!</strong></p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="forget_a_password">Forget a password?</h2>
<div class="sectionbody">
<div class="sect2">
<h3 id="i_changed_and_forgot_john_harvard_s_password">I changed and forgot John Harvard’s password</h3>
<div class="olist arabic">
<ol class="arabic">
<li>
<p>Start (or <a href="#how_to_restart_appliance">restart</a>) the appliance.</p>
</li>
<li>
<p>As soon as the appliance starts to boot, click inside of its window
(again and again, if need be), until your cursor is "captured" (i.e.,
disappears).</p>
</li>
<li>
<p>When you see the black <strong>GNU GRUB</strong> screen, hit your keyboard’s down
arrow to select <em>"Advanced options for Generic</em>', then hit Enter.</p>
</li>
<li>
<p>On the screen that appears, select (with your keyboard’s arrow keys)
the row that’s parenthetically called <strong>recovery mode</strong>, then hit Enter.</p>
</li>
<li>
<p>The appliance should boot more quickly than usual. When you see a
<strong>root@appliance (~):</strong> prompt, execute</p>
<div class="listingblock">
<div class="content">
<pre>passwd jharvard</pre>
</div>
</div>
<div class="paragraph">
<p>and input a new password for John Harvard (e.g., <strong>crimson</strong>) twice as
prompted.</p>
</div>
</li>
<li>
<p>Type</p>
<div class="listingblock">
<div class="content">
<pre>exit</pre>
</div>
</div>
<div class="paragraph">
<p>to restart the appliance.</p>
</div>
</li>
</ol>
</div>
<div class="paragraph">
<p>You should then be able to log in as John Harvard again.</p>
</div>
</div>
<div class="sect2">
<h3 id="i_forgot_john_harvard_s_mysql_password">I forgot John Harvard’s MySQL password</h3>
<div class="paragraph">
<p>John Harvard’s password for MySQL is <strong>crimson</strong> by default. But if you
changed either to something you do not remember, you can change both
back to <strong>crimson</strong> by <a href="#how_to_open_a_terminal">opening a terminal</a>
and executing the below:</p>
</div>
<div class="paragraph">
<p><code>sudo&nbsp;yum&nbsp;-y&nbsp;reinstall&nbsp;appliance50</code></p>
</div>
<div class="paragraph">
<p>That command will restore the appliance to "factory defaults." It will
not delete any code that you’ve written.</p>
</div>
</div>
</div>
</div>
<div class="sect1">
<h2 id="Changelog">Changelog</h2>
<div class="sectionbody">
<div class="ulist">
<ul>
<li>
<p><a href="../1.4#Changelog">1.4</a></p>
</li>
<li>
<p><a href="../2.0#Changelog">2.0</a></p>
</li>
<li>
<p><a href="../2.1#Changelog">2.1</a></p>
</li>
<li>
<p>2.2</p>
</li>
<li>
<p><a href="../2.3#Changelog">2.3</a></p>
</li>
<li>
<p><a href="../3#Changelog">3</a></p>
</li>
<li>
<p>19-0</p>
<div class="ulist">
<ul>
<li>
<p>Upgraded to Fedora 19.</p>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="sect1">
<h2 id="known_issues">Known Issues</h2>
<div class="sectionbody">
<div class="paragraph">
<p><em>None at this time.</em></p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="future_work">Future Work</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Below are features that may be included in some future version of the
appliance.</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Add Selenium.</p>
</li>
<li>
<p>Add dnsmasq and resolve *.localdomain to 127.0.0.1.</p>
</li>
<li>
<p>Add support for static IPs.</p>
</li>
</ul>
</div>
</div>
</div>
<div class="sect1">
<h2 id="acknowledgements">Acknowledgements</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Many thanks to everyone who’s helped us improve the CS50 Appliance,
including, but not limited to:</p>
</div>
<div class="ulist">
<ul>
<li>
<p>Aaron Oehlschlaeger</p>
</li>
<li>
<p>Amir</p>
</li>
<li>
<p>Chris Gerber</p>
</li>
<li>
<p>Dan Armendariz</p>
</li>
<li>
<p>Darrin Ragsdale</p>
</li>
<li>
<p>Dotty</p>
</li>
<li>
<p>Federico Lerner</p>
</li>
<li>
<p>Glenn Holloway</p>
</li>
<li>
<p>James Lankford</p>
</li>
<li>
<p>Kartikeya Srivastava</p>
</li>
<li>
<p>Matthew Polega</p>
</li>
<li>
<p>Matthew Roknich</p>
</li>
<li>
<p>Mauro Braunstein</p>
</li>
<li>
<p>Nobu Kikuchi</p>
</li>
<li>
<p>Philip Durbin</p>
</li>
<li>
<p>R.J. Aquino</p>
</li>
<li>
<p>Rob Bowden</p>
</li>
<li>
<p>Rod Ruggiero</p>
</li>
<li>
<p>Rolando Cruz</p>
</li>
<li>
<p>Rory O’Reilly</p>
</li>
<li>
<p>Sergio Prado</p>
</li>
<li>
<p>Shaun Gibson</p>
</li>
</ul>
</div>
</div>
</div>
        </div>
</div>        

    


