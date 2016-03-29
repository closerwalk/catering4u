// JavaScript Document
var Calendar
var d = new Date();
						new Calendar({ inputField:"eventdate", dateFormat:"%B %d, %Y", trigger:"eventdate", bottomBar:false, onSelect:function() {
						var sel_date=document.getElementById("eventdate").value;
						if(Date.parse(sel_date) <= Date.parse(d)){
							alert('selected date should be future date.');
							document.getElementById("eventdate").value="";
							this.hide();
							//var date = Calendar.intToDate(this.selection.get()); this.hide();
						}else{
							var date = Calendar.intToDate(this.selection.get()); this.hide();
						} 
						} });
						function clearRangeStart() { document.getElementById("eventdate").value = ""; };
