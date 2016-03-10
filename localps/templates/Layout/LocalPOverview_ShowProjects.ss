<% if $Projects %>
    <% loop $Projects %>
        $Title - <a href="#" title="Details"><i class="icon_small icon-edit"></i> </a>
    <% end_loop %>
<% end_if %>