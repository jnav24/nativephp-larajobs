<div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
    <div class="ml-4 mt-2">
        <h3 class="text-base font-semibold leading-6 text-gray-900">Job Postings</h3>
    </div>
    <div class="ml-4 mt-2 flex-shrink-0">
        <button class="relative inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500" type="button">
            Create new job
        </button>
    </div>

    <p>{{ $feeds['title'] }}</p>
    <p>{{ $feeds['permalink'] }}</p>

    @foreach($feeds['items'] as $item)
        <div class="border border-gray-300 rounded-lg">
            <h2><a href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a></h2>
            <p>{{ $item->get_id() }}</p>
            <p>{{ $item->get_description() }}</p>
            <p>{{ $item->get_author()->name }}</p>
            <p>{{ $item->get_item_tags(trim($feeds['permalink'],'/'), 'location')[0]['data'] }}</p>
            <p>{{ $item->get_item_tags(trim($feeds['permalink'],'/'), 'salary')[0]['data'] }}</p>
            <p>{{ $item->get_item_tags(trim($feeds['permalink'],'/'), 'job_type')[0]['data'] }}</p>
            <p>{{ $item->get_item_tags(trim($feeds['permalink'],'/'), 'company_logo')[0]['data'] }}</p>
            <p>{{ $item->get_item_tags(trim($feeds['permalink'],'/'), 'tags')[0]['data'] }}</p>
            <p><small>Posted on {{ $item->get_date('j F Y | g:i a') }}</small></p>
            <hr>
            <hr>
        </div>
    @endforeach
</div>
