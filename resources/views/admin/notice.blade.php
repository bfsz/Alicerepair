{{-- 公告详情页 --}}
<div class="card" style="margin: 10px 10px">
    <div class="card-header"><h1>{{ $data[0]->name }}</h1></div>
    <div class="card-footer" style="color: #bbbbbb">发布时间：{{ $data[0]->created_at }}</div>
    <br>
    <div class="card-body">{!! $data[0]->contents !!}</div>
</div>
