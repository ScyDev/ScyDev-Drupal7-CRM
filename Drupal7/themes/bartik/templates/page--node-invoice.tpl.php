
<style>
* {
	font-size: 16px;
}

#logo img {
	position: relative;
	top: -52px;
	left: -20px;
}

.node-teaser {
	border: none !important;
}

.one-sidebar #content {
	width: 100% !important;
}

.pane-node-created {
	text-align: right !important;
}

#sender-address {
	position: relative;
	top: -110px;
}

#sender-address table {
	width: 350px;
}

#sender-address tr,
#bankdaten pre,
#bankdaten tr,
.view-footer,
#footer table tr {
	background-color: transparent !important;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
}

#sender-address tr td, 
#sender-address tr td a {
	font-size: 12px !important;
}

#bankdaten pre {
	padding-left: 0 !important;
}

#bankdaten pre .indent {
	padding-left: 15px !important;
}

#bankdaten table {
	width: 300px;
}

#bankdaten td {
	padding: 0;
}

#recipient-address {
	float: right;
	padding-right: 80px;
	position: relative;
	top: -130px;
}

.pane-node-title .pane-content {
	font-weight: bold;
	font-size: 22px !important;
}
.pane-node-title .pane-content:before {
	content: "Rechnung: ";
}

.pane-node-content h2.pane-title {
	display: none;
}

.view-time-for-task tr td, 
.view-time-for-task tr td span,
.view-time-for-task tr td a {
	font-size: 12px !important;
}

.view-time-for-task table th {
	font-size: 12px !important;
	background-color: #757575;
	color: #000000;
}

.view-time-for-task table td {
	padding-top: 0;
	padding-bottom: 0;
}


.views-table .views-field-field-start-time-1, 
.views-table .views-field-field-end-time {
	white-space: nowrap;
}

.views-table .views-field-field-task {
	min-width: 200px;
}

.views-table .views-field-php-2 {
	min-width: 50px;
}

.views-table tr td {
	border-top: solid black 1px;
	border-width: 1px 0 0 0;
	border-color: #ccc white white white;
	border-style: solid none none none;
}

.view-time-for-task table td.odd {
	background-color: rgba(0, 0, 0, 0.105);
}

.view-time-for-task table td.odd {
	background-color: rgba(0, 0, 0, 0.063);
}

#signature img {
	width: 250px;
	height: 50px;
	position: relative;
	top: -95px;
	left: 250px;
}

@media print
.pagebreak {
	page-break-before: always;
}

</style>

    <div id="content" class="column"><div class="section">
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>

    </div></div> <!-- /.section, /#content -->

