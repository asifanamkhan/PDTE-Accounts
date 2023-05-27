<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 4px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 4px;
        padding-bottom: 4px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }

</style>
<p style="color: black; font-weight: bold">{{$level}}</p>
<form action="" id="addFrom">
    <div class="row">
        <div class="col-md-5">
            <label for="">Code</label>
            <input type="text" name="acc_code" class="form-control">
        </div>
        <div class="col-md-5">
            <label for="">Name</label>
            <input type="text" id="acc_name" name="acc_name" class="form-control">
        </div>
        <div class="col-md-2 ">
            <label for="" style="color: white">---</label>
            <button id="submit" style="display: block" class="btn btn-sm btn-info">Add</button>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="parent_code" value="{{$parent_code}}">
    </div>
</form>

<div class="mt-2">
    <table class="" id="customers">
        <thead>
        <tr>
            <th style="width: 30%">Code</th>
            <th style="width: 70%">Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <td>{{$account->acc_code}}</td>
                <td>{{$account->acc_name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
    $('#addFrom').on('submit', function (e) {
        let code = $('#acc_name').val()
        e.preventDefault();
        $.ajax({
            type: 'POST',
            data: $('#addFrom').serialize(),
            url: "{{ route('economic-account.store') }}",
            success: function (data) {
                console.log(data)
                getTreeData();
                add(1, {{$parent_code}});
            }
        });
    })

</script>
