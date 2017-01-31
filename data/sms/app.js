$(document).on("ready",inicio);	
	var d = new Date();
	var currDate = d.getDate();
	var currMonth = d.getMonth() + 1;
	var currYear = d.getFullYear();
	var dateStr = currDate + "/" + currMonth + "/" + currYear;			
	function inicio (){		
		//initiate dataTables plugin
		var oTable1 = 
		$('#tabla_sms')
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.dataTable( {
			bAutoWidth: false,
			"aoColumns": [
			 	{ "bSortable": false },			  	 
			  	null,
			  	null,
			  	null,
			  	null,
			  	null,
			  	null, 
			  	null, 
			  	null,				
			],
			"aaSorting": [],
			//"paging":   false,
			 "pageLength": 10,
			"bFilter": false,
			//,
			//"sScrollY": "200px",
			//"bPaginate": false,

			//"sScrollX": "100%",
			//"sScrollXInner": "120%",
			//"bScrollCollapse": true,
			//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
			//you may want to wrap the table inside a "div.dataTables_borderWrap" element

			//"iDisplayLength": 50
	    } );
		//oTable1.fnAdjustColumnSizing();
		//TableTools settings
		TableTools.classes.container = "btn-group btn-overlap";
		TableTools.classes.print = {
			"body": "DTTT_Print",
			"info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
			"message": "tableTools-print-navbar"
		}
		//initiate TableTools extension
		var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
			"sSwfPath": "../../dist/js/dataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf", //in Ace demo dist will be replaced by correct assets path			
			"sRowSelector": "td:not(:last-child)",
			"sRowSelect": "multi",
			"fnRowSelected": function(row) {
				//check checkbox when row is selected
				try { $(row).find('input[type=checkbox]').get(0).checked = true }
				catch(e) {}
			},
			"fnRowDeselected": function(row) {
				//uncheck checkbox
				try { $(row).find('input[type=checkbox]').get(0).checked = false }
				catch(e) {}
			},
			"sSelectedClass": "success",
	        "aButtons": [
				{
					"sExtends": "copy",
					"sToolTip": "Copy to clipboard",
					"sButtonClass": "btn btn-white btn-primary btn-bold",
					"sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
					"fnComplete": function() {
						this.fnInfo( '<h3 class="no-margin-top smaller">Table copied</h3>\
							<p>Copied '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) to the clipboard.</p>',
							1500
						);
					}
				},				
				{
					"sExtends": "csv",
					"sToolTip": "Export to CSV",
					"sButtonClass": "btn btn-white btn-primary  btn-bold",
					"sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
				},				
				{
					"sExtends": "pdf",
					"sToolTip": "Export to PDF",
					"sButtonClass": "btn btn-white btn-primary  btn-bold",
					"sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
				},				
				{
					"sExtends": "print",
					"sToolTip": "Print view",
					"sButtonClass": "btn btn-white btn-primary  btn-bold",
					"sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",					
					"sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",					
					"sInfo": "<h3 class='no-margin-top'>Print view</h3>\
							  <p>Please use your browser's print function to\
							  print this table.\
							  <br />Press <b>escape</b> when finished.</p>",
				}
	        ]
	    } );
		//we put a container before our table and append TableTools element to it
	    $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));		
		//also add tooltips to table tools buttons
		//addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
		//so we add tooltips to the "DIV" child after it becomes inserted
		//flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
		setTimeout(function() {
			$(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
				var div = $(this).find('> div');
				if(div.length > 0) div.tooltip({container: 'body'});
				else $(this).tooltip({container: 'body'});
			});
		}, 200);		
		//ColVis extension
		var colvis = new $.fn.dataTable.ColVis( oTable1, {
			"buttonText": "<i class='fa fa-search'></i>",
			"aiExclude": [0, 6],
			"bShowAll": true,
			//"bRestore": true,
			"sAlign": "right",
			"fnLabel": function(i, title, th) {
				return $(th).text();//remove icons, etc
			}			
		}); 		
		//style it
		$(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')		
		//and append it to our table tools btn-group, also add tooltip
		$(colvis.button())
		.prependTo('.tableTools-container .btn-group')
		.attr('title', 'Show/hide columns').tooltip({container: 'body'});		
		//and make the list, buttons and checkboxed Ace-like
		$(colvis.dom.collection)
		.addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
		.find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
		.find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');		
		/////////////////////////////////
		//table checkboxes
		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);		
		//select/deselect all rows according to table header checkbox
		$('#tabla_sms > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header			
			$(this).closest('table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) tableTools_obj.fnSelect(row);
				else tableTools_obj.fnDeselect(row);
			});
		});		
		//select/deselect a row when the checkbox is checked/unchecked
		$('#tabla_sms').on('click', 'td input[type=checkbox]' , function(){
			var row = $(this).closest('tr').get(0);
			if(!this.checked) tableTools_obj.fnSelect(row);
			else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
		});		
		$(document).on('click', '#tabla_sms .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});				
		//And for the first simple table, which doesn't have TableTools or dataTables
		//select/deselect all rows according to table header checkbox
		var active_class = 'active';
		$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header			
			$(this).closest('table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
				else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
			});
		});		
		//select/deselect a row when the checkbox is checked/unchecked
		$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
			var $row = $(this).closest('tr');
			if(this.checked) $row.addClass(active_class);
			else $row.removeClass(active_class);
		});		
		/********************************/
		//add tooltip for small view action buttons in dropdown menu
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});		
		//tooltip placement on right or left
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();
			var off2 = $source.offset();
			//var w2 = $source.width();
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}			
		////////////////////////////////////////////												
		$('#txt_2').datepicker({                        
            autoclose: true,
            format: "dd-mm-yyyy",
            todayHighlight: true,
            language: 'es',
            endDate: '0d',
        }).datepicker("setDate", dateStr);		

        $('#txt_3').datepicker({                        
            autoclose: true,
            format: "dd-mm-yyyy",
            todayHighlight: true,
            language: 'es',
            endDate: '0d',
        }).datepicker("setDate", dateStr);		
        $("#btn_1").on('click',obtener_datos);
        var pos = 0;
        $("#btn_2").on('click',function(){
        	enviar_datos(pos);
        });
	}	

	function obtener_datos(){
		var dataTable = $('#tabla_sms').dataTable();		
		$.ajax({        
	        type: "POST",
	        dataType: 'json',        
	        data : { 
	        	inicio : $("#txt_2").val(),
	        	corte : $("#txt_3").val(),
	        	base : $("#txt_1").is(":checked")
	       	},
	        url: "app.php",        
	        success: function(response) {         			        	
	        	dataTable.fnClearTable();
	        	for (var i = 0; i < response.length; i=i+9) {	
	        		dataTable.fnAddData([
			            response[i+0],
			            response[i+1],
			            response[i+2],	            
			            response[i+3],	  
			            response[i+5],	  
			            response[i+6],	  
			            '<span class="label label-sm label-danger">'+response[i+4]+'</span>',	  			            			            
			            response[i+7],	  
			            response[i+8],	  
			           	]);                    
	            }                     
	        }
	    });	      
	}	

	function enviar_datos(pos) {				
		
		var dataTable = $('#tabla_sms').dataTable().fnGetData();				
		var valor = dataTable[0][6];		
		var valor = $(valor).text();
		var telefono = dataTable[pos][4];			
		var mensaje = "Accion Imbaburapak le informa que su prestamo vence " + dataTable[pos][7]+ ", con valor aproximado de "+valor+" por favor acercase a pagar en las oficinas de la Cooperativa a cancelar";
		$.ajax({
			type: 'POST',	
			url: 'http://172.16.1.108:9091/sistema_mensajes/data/sms/app_sms.php',            	
			data: {
				texto : mensaje,
				tel : telefono
			},
			success: function(data){
				if(data == 'OK'){
					alert("Mensaje enviado");
					pos++;
					enviar_datos(pos);										
					
				}		
			}	
		});			
		return false;	
		
	}