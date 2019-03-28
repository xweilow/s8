<script src="<?php echo base_url() ?>assets/vendor/orgchart/orgchart.min.js"></script>

<section class="admin-content">
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-6 text-white p-b-30">
                    <div class="media">
                        <div class="avatar avatar mr-3">
                            <div class="avatar-title rounded-circle bg-soft-success">G</div>
                        </div>
                        <div class="media-body">
                            <h1>Genealogy</h1>
                            <p class="opacity-75">Your team that build career together.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pull-up">
        <div class="row">
            <div class="col-12">
                <div class="card" style="margin-bottom: 50px;">
                    <div class="card-body">
                        <div class="table-responsive p-t-10">
                            <div id="tree"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function(){
	// documentation - https://balkangraph.com/OrgChartJS/Docs/Layout
    var chart = new OrgChart(document.getElementById("tree"), {
    	scaleMin: 0.5,
    	scaleMax: 2,
    	lazyLoading: true,
        enableSearch: false,
        template: "diva",
        toolbar: false,
        nodeBinding: {
            field_0: "Name",
            field_1: "Rank",
            img_0: "img"
        },
        nodes: [
            { id: 1, Name: "Jack Hill", Rank: "Chairman and CEO", "Total Sales": "100", img: "<?= base_url() ?>img/icon-user.png" },
            { id: 2, pid: 1, Name: "Lexie Cole", Rank: "QA Lead", img: "<?= base_url() ?>img/icon-user.png" },
            { id: 3, pid: 1, Name: "Janae Barrett", Rank: "Technical Director", img: "<?= base_url() ?>img/icon-user.png" },
            { id: 4, pid: 1, Name: "Aaliyah Webb", Rank: "Manager", img: "<?= base_url() ?>img/icon-user.png" },
            { id: 5, pid: 1, Name: "Elliot Ross", Rank: "QA", img: "<?= base_url() ?>img/icon-user.png" },
            { id: 6, pid: 1, Name: "Anahi Gordon", Rank: "QA", img: "<?= base_url() ?>img/icon-user.png" },
            { id: 7, pid: 1, Name: "Knox Macias", Rank: "QA", img: "<?= base_url() ?>img/icon-user.png" },
            { id: 8, pid: 1, Name: "Nash Ingram", Rank: ".NET Team Lead", img: "<?= base_url() ?>img/icon-user.png" },
            { id: 9, pid: 1, Name: "Sage Barnett", Rank: "JS Team Lead", img: "<?= base_url() ?>img/icon-user.png" }
        ]
    });

    chart.toolbarUI.showLayout();
});
</script>
