<x-app-layout>

    @section('title', 'Economic Account')
    <style>
        .tree, .tree ul {
            margin: 0;
            padding: 0;
            list-style: none;
            margin-left: 10px;
        }

        .tree ul {
            margin-left: 1em;
            position: relative
        }

        .tree ul ul {
            margin-left: .5em
        }

        .tree ul:before {
            content: "";
            display: block;
            width: 0;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            border-left: 1px solid
        }

        .tree li {
            margin: 0;
            padding: 0 1em;
            line-height: 2em;
            color: #369;
            font-weight: 700;
            position: relative
        }

        .tree ul li:before {
            content: "";
            display: block;
            width: 10px;
            height: 0;
            border-top: 1px solid;
            margin-top: -1px;
            position: absolute;
            top: 1em;
            left: 0
        }

        .tree ul li:last-child:before {
            background: #fff;
            height: auto;
            top: 1em;
            bottom: 0
        }

        .indicator {
            margin-right: 5px;
        }

        .tree li a {
            text-decoration: none;
            color: #369;
        }

        .tree li button, .tree li button:active, .tree li button:focus {
            text-decoration: none;
            color: #369;
            border: none;
            background: transparent;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            outline: 0;
        }
    </style>
    <x-slot name="header">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-compass"></i>
                </div>
                <div>
                    <h4>Economic Account</h4>
                </div>
            </div>
            {{--            <div class="page-title-actions">--}}
            {{--                <a href="{{ route('book-category.index') }}" type="button" class="btn btn-sm btn-dark">--}}
            {{--                    <i class="fas fa-arrow-left mr-1"></i>--}}
            {{--                    Back--}}
            {{--                </a>--}}
            {{--            </div>--}}
        </div>
    </x-slot>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="d-inline">
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{Session::get('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <ul id="tree1">


                                </ul>
                            </div>
                            <div class="col-md-6" id="account-add-area">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            getTreeData();
            function getTreeData(){
                $.ajax({
                    type:'GET',
                    url:"{{ route('get-eco-account-tree-list') }}",
                    success:function(data){
                        $('#tree1').html(data)

                        $.fn.extend({
                            treed: function (o) {

                                var openedClass = 'fa-minus-circle';
                                var closedClass = 'fa-plus-circle';

                                if (typeof o != 'undefined') {
                                    if (typeof o.openedClass != 'undefined') {
                                        openedClass = o.openedClass;
                                    }
                                    if (typeof o.closedClass != 'undefined') {
                                        closedClass = o.closedClass;
                                    }
                                }
                                ;

                                //initialize each of the top levels
                                var tree = $(this);
                                tree.addClass("tree");
                                tree.find('li').has("ul").each(function () {
                                    var branch = $(this); //li with children ul
                                    branch.prepend("<i class='indicator fas " + closedClass + "'></i>");
                                    branch.addClass('branch');
                                    branch.on('click', function (e) {
                                        if (this == e.target) {
                                            var icon = $(this).children('i:first');
                                            icon.toggleClass(openedClass + " " + closedClass);
                                            $(this).children().children().toggle();
                                        }
                                    })
                                    branch.children().children().toggle();
                                });
                                //fire event from the dynamically added icon
                                tree.find('.branch .indicator').each(function () {
                                    $(this).on('click', function () {
                                        $(this).closest('li').click();
                                    });
                                });
                                //fire event to open branch if the li contains an anchor instead of text
                                tree.find('.branch>a').each(function () {
                                    $(this).on('click', function (e) {
                                        $(this).closest('li').click();
                                        e.preventDefault();
                                    });
                                });
                                //fire event to open branch if the li contains a button instead of text
                                tree.find('.branch>button').each(function () {
                                    $(this).on('click', function (e) {
                                        $(this).closest('li').click();
                                        e.preventDefault();
                                    });
                                });
                            }
                        });

                        //Initialization of treeviews

                        $('#tree1').treed();

                        $('#tree2').treed({openedClass: 'fa-folder-open', closedClass: 'fa-folder'});

                    }
                });
            }
        </script>

        <script>

        </script>

        <script>
            function add(type, code) {
                console.log(code);
                $.ajax({
                    type:'POST',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        type: type,
                        code: code,
                    },
                    url:"{{ route('get-eco-account-data-as-parent') }}",
                    success:function(data){
                        $('#account-add-area').html(data)
                    }
                });
            }
        </script>

    @endpush
</x-app-layout>
