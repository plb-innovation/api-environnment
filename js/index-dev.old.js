function WindowsInit() {
    $('.box').hide();
    $('.subbox').hide();

    $('#load-long').hide();
    $('#load-speed').hide();
    $('#start-demo-long-ok').hide();
    $('#comment-demo-long-succed').hide();

    $('#start-demo-speed-ok').hide();
    $('#comment-demo-speed-succed').hide();

    $('#dashboard').show();
    $('#progression-bar-demo-long').hide();
    $('#progression-bar-demo-speed').hide();
    $('div[name=dataTablesGetBridge]').hide();

    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
}

function showStuff(id) {
    $('.box').hide();
    $('#'+id).show();

}

function showStuffSub(id) {
    $('.subbox').hide();
    $('#'+id).show();
}

function showStuffNonesub() {
    $('.subbox').hide();
}

function traiterSubmit(f){
    if (f.host.value != null){
        alert("yes");

    }
}

function sleep(milliSeconds){
    var startTime = new Date().getTime(); // get the current time
    while (new Date().getTime() < startTime + milliSeconds); // hog cpu
}

function AddClicktoDatabase(name) {
    $.post('SqlAddClick.php',
        {
            nameEngagement : name
        },
        'text'
    );
}

function AddActions(name, description){
    $.post('SqlAddActions.php',
        {
            name : name,
            description : description
        },
        'text'
    );
}

$(document).ready(function(){
    WindowsInit();
    $('#dataTables-get-bridge').dataTable();

    $("#new-tenant").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateTenant.php',
            {
                // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#tenant").val()
            },
            function(data){
                $("#resultat-new-tenant").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Tenant "+$("#tenant").val()+" has been created.");
        AddClicktoDatabase("ACI");
    });

    $("#new-bridge").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateBridgeDomain.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#tenant-bridge").val(),
                bridge : $("#bridge-domain-bridge").val(),
                private : $("#private-network-bridge").val(),
                subnet : $("#subnet-bridge").val()
            },
            function(data){
                $("#resultat-new-bridge-domain").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Bridge "+$("#bridge-domain-bridge").val()+" has been created.");
        AddClicktoDatabase("ACI");
    });

    $("#new-epg-bridge-chain").click(function(e){
        e.preventDefault();
        $("#resultat-new-epg-bridge-chain").html("<p>Operation in progress ...</p>");
        $.post('CreateEPGBridgeChain.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#tenant-epg-bridge-chain").val(),
                private : $("#private-epg-bridge-chain").val(),
                profile : $("#profile-epg-bridge-chain").val(),
                epg : $("#epg-radical-name-epg-bridge-chain").val(),
                bridge : $("#bridge-radical-name-epg-bridge-chain").val(),
                specific :  $("#specific-epg-bridge-chain").val(),
                vlan : $("#vlan-pool-epg-bridge-chain").val()

            },
            function(data){
                $("#resultat-new-epg-bridge-chain").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "EPG chain "+$("#specific-epg-bridge-chain").val()+" has been created.");
        AddClicktoDatabase("ACI");
    });

    $("#new-physical-domain").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreatePhysicalDomain.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                physical : $("#physical-domain-physical").val(),
                pool : $("#vlan-pool-physical").val()
            },
            function(data){
                $("#resultat-new-physical-domain").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Physical Domain "+$("#physical-domain-physical").val()+" has been created.");
        AddClicktoDatabase("ACI");
    });

    $("#new-pool-vlan").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreatePoolVlans.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#tenant-pool-vlan").val(),
                mode : $("#mode-pool-vlan").val(),
                vlan : $("#vlan-pool-vlan").val(),
                from : $("#from-vlan-pool-vlan").val(),
                to : $("#to-pool-vlan").val()
            },
            function(data){
                $("#resultat-new-pool-vlan").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Pool Vlans "+$("#vlan-pool-vlan").val()+" has been created.");
        AddClicktoDatabase("ACI");
    });

    $("#new-epg").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateEPG.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#tenant-epg").val(),
                profile : $("#profile-epg").val(),
                epg : $("#epg-epg").val(),
                vlan : $("#vlan-epg").val(),
                bridge : $("#bridge-epg").val()
            },
            function(data){
                $("#resultat-new-epg").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "EPG "+$("#epg-epg").val()+" has been created.");
        AddClicktoDatabase("ACI");
    });

    $("#new-aaep").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateAttachableAccessEntityProfile.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                aaep : $("#aaep-aaep").val(),
                physical : $("#physical-aaep").val(),
                groupPolicy : $("#group-policy-aaep").val(),
                numIntprofile : $("#num-profile-aaep").val(),
                nameProfile : $("#profile-name-aaep").val(),
                selector : $("#selector-aaep").val(),
                numCard : $("#from-card-aaep").val(),
                nameCard : $("#name-card-aaep").val(),
                fromPort : $("#from-port-aaep").val(),
                toPort : $("#to-port-aaep").val(),
                switchProfile : $("#switch-profile-aaep").val(),
                infraName : $("#infra-name-aaep").val(),
                range : $("#start-range-aaep").val()
            },
            function(data){
                $("#resultat-new-aaep").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "AAEP "+$("#aaep-aaep").val()+" has been created.");
        AddClicktoDatabase("ACI");
    });

    $("#del-tenant").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteTenant.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#del-tenant-tenant").val()
            },
            function(data){
                $("#resultat-del-tenant").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Tenant "+$("#del-tenant-tenant").val()+" has been deleted.");
        AddClicktoDatabase("ACI");
    });

    $("#del-pool-vlan").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeletePoolVlan.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                vlan : $("#del-vlan-pool-vlan").val(),
                mode : $("#del-mode-pool-vlan").val()
            },
            function(data){
                $("#resultat-del-pool-vlan").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Pool Vlan "+$("#del-vlan-pool-vlan").val()+" has been deleted.");
        AddClicktoDatabase("ACI");
    });

    $("#del-physical-domain").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeletePhysicalDomain.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                physical : $("#del-physical-physical-domain").val()
            },
            function(data){
                $("#resultat-del-physical-domain").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Physical Domain "+$("#del-physical-physical-domain").val()+" has been deleted.");
        AddClicktoDatabase("ACI");
    });

    $("#del-aaep").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteAttachableAccessEntityProfile.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                aaep : $("#del-aaep-aaep").val()
            },
            function(data){
                $("#resultat-del-aaep").html("<p>"+data+"</p>");

            },
            'text'
        );
        AddActions("ACI", "AAEP "+$("#del-aaep-aaep").val()+" has been deleted by.");

    });

    $("#del-subnet").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteSubnet.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#del-tenant-subnet").val(),
                bridge : $("#del-bridge-domain-subnet").val(),
                subnet : $("#del-subnet-subnet").val()
            },
            function(data){
                $("#resultat-del-subnet").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Subnet "+$("#del-subnet-subnet").val()+" has been deleted.");
        AddClicktoDatabase("ACI");
    });

    $("#get-bridge-info").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('GetBridgeDomain.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#get-tenant-bridge").val()
            },
            function(data){
                $("#resultat-get-bridge").html("<p>"+data+"</p>");
                $('div[name=dataTablesGetBridge]').show();
                $("#dataTables-get-bridge-body").html("<tr><td>"+"0512334"+"</td><td>"+"BD-static-mamorim"+"</td><td>"+"23412434"+"</td><td>"+"124346643"+"</td><td>"+"98318"+"</td><td>"+"225.1.162.17"+"</td><td>"+"inherit"+"</td></tr>");
                for (var t in data) {
                    alert("plop1");
                    var Stab=t['fvBD'];
                    for (var u in Stab){
                        $("#dataTables-get-bridge-body").html("<tr><td>"+Stab['attributes']['uid']+"</td><td>"+Stab['attributes']['name']+"</td><td>"+Stab['attributes']['pcTag']+"<td>"+Stab['attributes']['scope']+"</td><td>"+Stab['attributes']['seg']+"</td><td>"+Stab['attributes']['bcastP']+"</td><td>"+Stab['attributes']['mtu']+"</td>");
                    }
                }
            },
            'text'
        );
    });

    $("#get-tenant-epg-info").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('GetEpgInfo.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#get-tenant-epg").val()
            },
            function(data){
                $("#resultat-get-epg").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddClicktoDatabase("ACI");
    });

    $("#verify-exist").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('GetExistTenant.php',
            {
                host : $("#host-chain").val(),
                login : $("#login-chain").val(),
                password : $("#passwd-chain").val(),
                tenant : $("#tenant-chain").val()
            },
            function(data){
                $("#resultat-chain-service").html("<p>"+data+"</p>");

            },
            'text'
        );
        AddClicktoDatabase("ACI");
    });

    $("#instance").click(function(e){
        showStuff('qvbn-configuration');
        e.preventDefault();

    });

    $("#start-demo-long").click(function(e){
        showStuff('aci-configuration');
        $('#prevent-windows').hide();
        $('#load-long').show();

        e.preventDefault();

        $.post('CreateChainServices.php',
            {
                host : $("#host-chain").val(),
                login : $("#login-chain").val(),
                password : $("#passwd-chain").val(),
                tenant : $("#tenant-chain").val(),
                private : $("#private-network-chain").val(),
                slice : $("#slice-number-chain").val(),
                chain : $("#chain-per-slice-chain").val(),
                numEpg : $("#epg-per-chain").val(),
                bridge : $("#bridge-domain-radical-chain").val(),
                subnet : $("#subnet-bridge-chain").val(),
                physical : $("#physical-domain-chain").val(),
                vlan : $("#vlan-pool-physical-chain").val(),
                profile : $("#profile-epg-chain").val(),
                epg : $("#epg-name-chain").val(),
                aaep : $("#aaep-aaep-chain").val(),
                policy : $("#group-policy-aaep-chain").val(),
                numIntProfile : $("#num-profile-aaep-chain").val(),
                nameIntProfile : $("#profile-name-aaep-chain").val(),
                selector : $("#selector-aaep-chain").val(),
                fromCardNum : $("#from-card-aaep-chain").val(),
                nameCard : $("#name-card-aaep-chain").val(),
                fromPort : $("#from-port-aaep-chain").val(),
                toPort : $("#to-port-aaep-chain").val(),
                nameSwitch : $("#switch-profile-aaep-chain").val(),
                infra : $("#infra-name-aaep-chain").val(),
                srange : $("#start-range-aaep-chain").val()
            },
            function(data){
                $("#resultat-chain-service-long").html("<p>"+data+"</p>");
                $('#load-long').hide();
                $('#start-demo-long').hide();
                $('#comment-demo-long').hide();
                $('#prevent-windows').show();
                $('#start-demo-long-ok').show();
                $('#comment-demo-long-succed').show();
            },
            'text'
        );

        AddActions("ACI", "The demonstration on "+$("#host-chain").val()+" has been launched.");
        AddClicktoDatabase("ACI");
    });

    $("#start-demo-speed").click(function(e){
        showStuff('aci-configuration');
        $('#prevent-windows').hide();
        $('#load-speed').show();

        e.preventDefault();

        $.post('CreateChainServices.php',
            {
                fileName : $("#select-fileName").val()
            },
            function(data){
                $("#windows-chain-service-speed").show();
                $("#resultat-chain-service-speed").html("<p>"+data+"</p>");
                $('#load-speed').hide();
                $('#start-demo-speed').hide();
                $('#comment-demo-speed').hide();
                $('#prevent-windows').show();
                $('#start-demo-speed-ok').show();
                $('#comment-demo-speed-succed').show();
            },
            'text'
        );

        AddActions("ACI", "The demonstration "+$("#select-fileName").val()+" has been launched.");
        AddClicktoDatabase("ACI");
    });

    $("#start-demo-speed-bridge-chain").click(function(e){
        e.preventDefault();
        $("#comment-demo-speed-bridge-chain").html("<p>Operation in progress ...</p>");
        $.post('CreateEPGBridgeChain.php',
            {
                fileName : $("#select-fileName-BridgeChain").val()
            },
            function(data){
                $("#comment-demo-speed-bridge-chain").html("<p>Finished operation</p>");
                $('#windows-chain-service-speed-bridge-chain').show();
                $('#start-demo-speed-bridge-chain').hide();
                $("#resultat-chain-service-speed-bridge-chain").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddActions("ACI", "The demo bridge chain "+$("#select-fileName").val()+" has been launched.");
        AddClicktoDatabase("ACI");
    });

    $("#demo-bridge-chain").click(function(e){
        e.preventDefault();
        $("#comment-demo-speed-bridge-chain").html("<p>Are you sure you want to run this demonstration ?</p>");
        $('#start-demo-speed-bridge-chain').show();
    });

    $("#demo-long").click(function(e){
        e.preventDefault();

        $('#start-demo-long-ok').hide();
        $('#comment-demo-long-succed').hide();
        $('#start-demo-long').show();
        $('#comment-demo-long').show();
    });

    $("#demo-speed").click(function(e){
        e.preventDefault();

        $('#start-demo-speed-ok').hide();
        $('#comment-demo-speed-succed').hide();
        $('#start-demo-speed').show();
        $('#comment-demo-speed').show();
    });

    $("#start-demo-long-ok").click(function(e){
        e.preventDefault();

    });

    $("#start-demo-speed-ok").click(function(e){
        e.preventDefault();

    });

    $("#save-config-demo").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();

        $.post('SaveConfigurationDemo.php',
            {
                fileName :$("#name-configuration-save").val(),
                host : $("#host-chain").val(),
                login : $("#login-chain").val(),
                password : $("#passwd-chain").val(),
                tenant : $("#tenant-chain").val(),
                private : $("#private-network-chain").val(),
                slice : $("#slice-number-chain").val(),
                chain : $("#chain-per-slice-chain").val(),
                numEpg : $("#epg-per-chain").val(),
                bridge : $("#bridge-domain-radical-chain").val(),
                subnet : $("#subnet-bridge-chain").val(),
                physical : $("#physical-domain-chain").val(),
                vlan : $("#vlan-pool-physical-chain").val(),
                profile : $("#profile-epg-chain").val(),
                epg : $("#epg-name-chain").val(),
                aaep : $("#aaep-aaep-chain").val(),
                policy : $("#group-policy-aaep-chain").val(),
                numIntProfile : $("#num-profile-aaep-chain").val(),
                nameIntProfile : $("#profile-name-aaep-chain").val(),
                selector : $("#selector-aaep-chain").val(),
                fromCardNum : $("#from-card-aaep-chain").val(),
                nameCard : $("#name-card-aaep-chain").val(),
                fromPort : $("#from-port-aaep-chain").val(),
                toPort : $("#to-port-aaep-chain").val(),
                nameSwitch : $("#switch-profile-aaep-chain").val(),
                infra : $("#infra-name-aaep-chain").val(),
                srange : $("#start-range-aaep-chain").val()
            },
            function(data){
                $("#answer-save-config").html("<p>"+data+"</p>")
            },
            'text'
        );

        AddActions("ACI", "The demonstration on "+$("#host-chain").val()+" has been saved by.");
        AddClicktoDatabase("ACI");
    });

    $("#preview-configuration").click(function(e){
        e.preventDefault();
        $.post('PreviewConfiguration.php',
            {
                fileName : $("#select-fileName").val()
            },
            function(data){
                $("#comment-demo-preview").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The configuration "+$("#select-fileName").val()+" has been previewed.");

    });

    $("#preview-configuration-bridge-chain").click(function(e){
        e.preventDefault();
        $.post('PreviewConfigurationBridgeChain.php',
            {
                fileName : $("#select-fileName-BridgeChain").val()
            },
            function(data){
                $("#comment-demo-preview-bridge-chain").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The config Bridge "+$("#select-fileName-BridgeChain").val()+" has been previewed.");

    });

    $("#preview-configuration-suppr").click(function(e){
        e.preventDefault();
        $.post('PreviewConfiguration.php',
            {
                fileName : $("#select-delete-configuration").val()
            },
            function(data){
                $("#comment-demo-preview-suppr").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The configuration "+$("#select-delete-configuration").val()+" has been previewed.");

    });

    $("#preview-configuration-suppr-bridge-chain").click(function(e){
        e.preventDefault();
        $.post('PreviewConfigurationBridgeChain.php',
            {
                fileName : $("#select-delete-configuration-bridge-chain").val()
            },
            function(data){
                $("#comment-demo-preview-suppr-bridge-chain").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The config Bridge"+$("#select-delete-configuration").val()+" has been previewed.");

    });

    $("#delete-configuration").click(function(e){
        e.preventDefault();
        $.post('DeleteConfiguration.php',
            {
                fileName : $("#select-delete-configuration").val()
            },
            function(data){
                $("#comment-delete").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The configuration "+$("#select-delete-configuration").val()+" has been deleted.");

    });

    $("#delete-configuration-bridge-chain").click(function(e){
        e.preventDefault();
        $.post('DeleteConfigurationBridgeChain.php',
            {
                fileName : $("#select-delete-configuration-bridge-chain").val()
            },
            function(data){
                $("#comment-demo-preview-del-bridge-chain").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The configuration "+$("#select-delete-configuration-bridge-chain").val()+" has been deleted.");

    });

    $("#save-config-demo-bridge-chain").click(function(e){
        e.preventDefault();

        $.post('SaveConfigurationDemoBridgeChain.php',
            {
                fileName :$("#name-configuration-epg-bridge-chain").val(),
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
                tenant : $("#tenant-epg-bridge-chain").val(),
                private : $("#private-epg-bridge-chain").val(),
                pool : $("#vlan-pool-epg-bridge-chain").val(),
                profile : $("#profile-epg-bridge-chain").val(),
                epg : $("#epg-radical-name-epg-bridge-chain").val(),
                bridge : $("#bridge-radical-name-epg-bridge-chain").val(),
                specific : $("#specific-epg-bridge-chain").val()
            },
            function(data){
                $("#resultat-new-epg-bridge-chain").html("<p>"+data+"</p>")
            },
            'text'
        );

        AddActions("ACI", "The demonstration on "+$("#host-default").val()+" has been saved by.");
        AddClicktoDatabase("ACI");
    });

    $("#new-vlan-services").click(function(e){
        e.preventDefault();

        UCS_DATA = {
            'ip_address': $("#host-default-vlan").val(),
            'login': $("#login-default-vlan").val(),
            'password': $("#passwd-default-vlan").val(),
            'radical' : $("#radical-vlan-name-services").val(),
            'specific' : $("#specific-vlan-number-services").val(),
            'group' : $("#attach-group-vlan-services").val(),
            'org' : $("#organisation-vlan-services").val(),
            'template' : $("#template-vlan-services").val(),
            'vmnic' : $("#card-vlan-services").val()
        };

        $('#resultat-new-vlan-services').html("<p>Operation in progress ...</p>");
        var url="http://plb-api.cisco.com:5000/.api/ucs/create-vlan";
        var ajaxFn = function (){ $.ajax({
            dataType: "json",
            url: url ,
            type: 'POST',
            data: UCS_DATA,
            crossDomain : true
        }).done(function (data){
            $('#resultat-new-vlan-services').html("<p> </p>");
            for (i = 0; i < data.resultat.length; i++) {
                $('#resultat-new-vlan-services').append("<p>"+data.resultat[i]+"</p>");
            }

            });
        };

        ajaxFn();

        AddActions("VLAN", "New Vlan(s) "+$("#specific-vlan-number-services").val()+" has been created on UCS Manager "+$("#host-default-vlan").val()+".");
        AddClicktoDatabase("VLAN");
    });

    $("#del-vlan-services").click(function(e){
        e.preventDefault();

        UCS_DATA = {
            'ip_address': $("#host-default-vlan").val(),
            'login': $("#login-default-vlan").val(),
            'password': $("#passwd-default-vlan").val(),
            'radical' : $("#del-radical-vlan-name-services").val(),
            'specific' : $("#del-specific-vlan-number-services").val(),
            'group' : $("#detach-group-vlan-services").val(),
            'org' : $("#del-organisation-vlan-services").val(),
            'template' : $("#del-template-vlan-services").val(),
            'vmnic' : $("#del-card-vlan-services").val()
        };
        $('#resultat-remove-vlan-services').html("<p>Operation in progress ...</p>");
        var url="http://plb-api.cisco.com:5000/.api/ucs/remove-vlan";
        var ajaxFn = function (){ $.ajax({
            dataType: "json",
            url: url ,
            type: 'POST',
            data: UCS_DATA

        }).done(function (data){
            $('#resultat-remove-vlan-services').html("<p> </p>");
            for (i = 0; i < data.resultat.length; i++) {
                $('#resultat-remove-vlan-services').append("<p>"+data.resultat[i]+"</p>");
            }

        });

        };
        ajaxFn();

        AddActions("VLAN", "Vlan(s) "+$("#del-specific-vlan-number-services").val()+" has been removed on UCS Manager "+$("#host-default-vlan").val()+".");
        AddClicktoDatabase("VLAN");
    });

});

