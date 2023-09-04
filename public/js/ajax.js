function load_style(){
  	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&load_style=1",
	    success:function(html){
	      	$('#load-style').html(html);
	    }
  	});
}

function add_style(){
	var id = $("#add_styleId").val();
	var name = $("#add_styleName").val();
  	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&add_style=1&id="+id+"&name="+name,
	    success:function(html){
	    	load_style()
	    }
  	});
}

function edit_style(id){
	var id = $("#id-"+id).val();
	var name = $("#name-"+id).val();
  	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&add_style=1&id="+id+"&name="+name,
	    success:function(html){
	    	load_style()
	    }
  	});
}

function delete_style(id){
  	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&delete_style=1&id="+id,
	    success:function(html){
	    	load_style()
	    }
  	});
}

function load_admin(){
	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&load_admin=1",
	    success:function(html){
	      	$('#load_admin').html(html);
	    }
  	});
}

function add_admin(){
	var name = $("#addAdmin-nik").val();
	var pass = $("#addAdmin-pass").val();
	var auth = $("#addAdmin-steam").val();
  	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&add_admin=1&name="+name+"&pass="+pass+"&auth="+auth,
	    success:function(html){
	    	load_admin()
	    }
  	});
}

function edit_admin(id){
	var name = $("#admin-Login-"+id).val();
	var pass = $("#admin-Pass-"+id).val();
	var auth = $("#admin-Steam-"+id).val();
  	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&edit_admin=1&name="+name+"&pass="+pass+"&auth="+auth+"&id="+id,
	    success:function(html){
	    	load_admin()
	    }
  	});
}

function delete_admin(id){
  	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&delete_admin=1&id="+id,
	    success:function(html){
	    	load_admin()
	    }
  	});
}

function load_allrecords(map){
	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&load_allrecords=1&map="+map,
	    success:function(html){
	    	$('#load_allrecords').html(html);
	    }
  	});
}

function allrecords_search(map, style){
	var track = $("#track").val();
	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&allrecords_search=1&map="+map+"&style="+style+"&track="+track,
	    success:function(html){
	    	$('#load_allrecords').html(html);
	    }
  	});
}

function delete_record(id){
	$.ajax({
	    type:"POST",
	    url:"/ajax",
	    data:"phpaction=1&delete_record=1&id="+id,
	    success:function(html){
	    	location.reload();
	    }
  	});
}