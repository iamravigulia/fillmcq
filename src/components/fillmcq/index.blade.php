<style>
    table {
        background: #fff;
        width: 94%;
        border: 0;
    }
    th {
        text-align: left;
        padding: 5px;
        background: rgb(218, 218, 218);
    }
    td {
        border: 1px solid rgb(218, 218, 218);
        padding: 0 5px;
    }
    tr:nth-child(odd) {
        background: rgb(243, 242, 242);
    }
</style>
<table>
    <thead>
        <th>#</th>
        <th>Question</th>
        <th>Options</th>
        {{-- <th>Level</th> --}}
        {{-- <th>Score</th> --}}
        <th>Created/Updated</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @php
            $fmt_mcqques = DB::table('fmt_fillmcq_ques')->get();
        @endphp
        @foreach ($fmt_mcqques as $que)
        <tr>
            <td>{{$que->id}}</td>
            <td>{{$que->question}}</td>
            <td>
                <ul>
                    @php $fmt_mcqans = DB::table('fmt_fillmcq_ans')->where('question_id', $que->id)->get() @endphp
                    @foreach ($fmt_mcqans as $ans)
                        <li @if($ans->arrange == 1) style="color:blue;" @endif >{{$ans->answer}}</li>
                    @endforeach
                </ul>
            </td>
            {{-- <td>{{$que->level_id}}</td>
            <td>{{$que->score}}</td> --}}
            <td>
                <div style="font-size:12px;">
                    <span>Created: </span>
                    {{date('d-n-Y g:i a',strtotime($que->created_at))}}
                </div>
                <div style="font-size:12px;">
                    <span>Updated: </span>
                    {{date('d-n-Y g:i a',strtotime($que->updated_at))}}
                </div>
            </td>
            <td>
                <a style="font-size: 12px; background:#4450f3; color:#fff; border-radius:4px; padding:2px 4px;" href="javascript:void(0);"  onclick="modalFILLMCQ({{$que->id}})">Edit</a>
                <a style="font-size: 12px; background:#f23939; color:#fff; border-radius:4px; padding:2px 4px;" href="{{route('fmt.mcq.delete', $que->id)}}">Delete</a>
            </td>
        </tr>
        <x-mcq.edit :message="$que->id"/>
        @endforeach
    </tbody>
</table>
<script>
    function modalFILLMCQ($id){
        var modal = document.getElementById('modalFILLMCQ'+$id);
        modal.classList.remove("hidden");
    }
    function closeModalFILLMCQ($id){
        var modal = document.getElementById('modalFILLMCQ'+$id);
        modal.classList.add("hidden");
    }
</script>