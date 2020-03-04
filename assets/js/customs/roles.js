
jQuery("#treeview_r1").kendoTreeView({
    checkboxes: {
    checkChildren: true,
    template: "<label class='custom-control custom-checkbox'><input type='checkbox' #= item.check# class='#= item.class #' name='role_resources[]' value='#= item.value #'  />&nbsp;&nbsp;&nbsp;<span class='custom-control-indicator'></span><span class='custom-control-description'>#= item.text #</span><span class='custom-control-info'>#= item.add_info #</span></label>"
    },
    check: onCheck,
    dataSource: [// sub 1
    { id: "", class: "", text: "Dashboard", add_info: "", value: "0d"},
    //{ id: "", class: "", text: "Organization", add_info: "", value: "1", items: [
    // sub 1
    { id: "", class: "", text: "Approve Listings",  add_info: "", value: "3", items: [
    // sub 2
    { id: "", class: "", text: "Add",  add_info: "", value: "3a",},
    { id: "", class: "", text: "Edit",  add_info: "", value: "3e",},
    { id: "", class: "", text: "Delete",  add_info: "", value: "3d",},
    { id: "", class: "", text: "View",  add_info: "", value: "3v",},
    ]},
    { id: "", class: "", text: "Transactions",  add_info: "", value: "3", items: [
        // sub 2
        { id: "", class: "", text: "Add",  add_info: "", value: "3a",},
        { id: "", class: "", text: "Edit",  add_info: "", value: "3e",},
        { id: "", class: "", text: "Delete",  add_info: "", value: "3d",},
        { id: "", class: "", text: "View",  add_info: "", value: "3v",},
        ]}
    //]},  
    ]
}); 
            
    // show checked node IDs on datasource change
    function onCheck() {
    var checkedNodes = [],
            treeView = jQuery("#treeview2").data("kendoTreeView"),
            message;		
            jQuery("#result").html(message);		
            console.log(checkedNodes);
    }


( function ( $ ) {
    "use strict";


    $('span.k-in ').html('');

} )( jQuery );