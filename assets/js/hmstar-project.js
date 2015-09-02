/**
 * 通过标签得到项目
 */
function hmstar_main_get_project_by_tag(url) {
  $.ajax({
    url: url,
    success: function(data) {
      if (data.status == 1) {
        $('#carousel-example-generic').html(data.msg);
      } else {
        $('#carousel-example-generic').html(data.msg);
      }
      return true;
    }
  })
}
/**
 * 大家投的项目
 */
function hmstar_main_get_project_by_vote(type) {
  var vote_type = $('#vote-option:checked').val();
  var search = $('#vote-search').val();
  type = type ? type : 'all';
  //alert(type);
  $.ajax({
    url: "/hmstar/project/projectlist/",
    data: {
      vote_type: vote_type,
      type: type,
      search: search
    },
    dataType: 'json',
    success: function(data) {
      if (data.status == 1) {
        $('#hmstar-vote-body').html(data.msg);
      } else {
        $('#hmstar-vote-body').html(data.msg);
      }
      return true;
    }
  })
}
