<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($types as  $type)
    <url>
        <loc>{{route("type_service_component",['name'=>$type->Service->name_service,"name_type"=>$type->name_type])}}</loc>
        <lastmod>{{$type->created_at->tz("GST")->toAtomString()}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
      </url>
    @endforeach
    @foreach ($services as  $service)
    <url>
        <loc>{{route("service_component",['name'=>$service->service_name])}}</loc>
        <lastmod>{{$type->created_at->tz("GST")->toAtomString()}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
      </url>
    @endforeach

  </urlset>
