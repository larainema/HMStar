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
  type = type ? type : 'all';
  //alert(type);
  $.ajax({
    url: "/hmstar/project/projectlist/",
    data: {
      vote_type: vote_type,
      type: type,
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
/**
 * 赞一下
 */
function hmstar_home_favour(project_id) {
  $.ajax({
    url: "/hmstar/project/favour/",
    data: {
      project_id: project_id,
    },
    dataType: 'json',
    success: function(data) {
      if (data.status == 1) {
        $("#favourCount").html(parseInt($("#favourCount").html()) + 1);
      } else {
        popBox(data.info, 'info', 3, function() {
          if (data.nologin != undefined) {
            common_show_user();
          }
        });
      }
    }
  })
}
/**
 * 关注
 */
function hmstar_home_attention(project_id) {
  $("#attention").unbind("click");
  var op = Math.abs(isAttention - 1);
  $.ajax({
    url: "/hmstar/project/attention/",
    data: {
      op: op,
      project_id: project_id,
    },
    dataType: 'json',
    success: function(data) {
      if (data.status == 1) {
        isAttention = op;
        if (op) {
          $("#attentionCount").html(parseInt($("#attentionCount").html()) + 1);
          $("#attentionText").html("已关注");
        } else {
          $("#attentionCount").html(parseInt($("#attentionCount").html()) - 1);
          $("#attentionText").html("关注");
        }
      } else {
        popBox(data.info, 'info', 3, function() {
          if (data.nologin != undefined) {
            hmstar_common_show_user();
          }
        });
      }
      $("#attention").bind("click", attention);
    }
  })
}

/**
 * 免费投票
 */
function hmstar_home_freevote(project_id) {
  $.ajax({
    url: "/hmstar/project/freevote/",
    data: {
      project_id: project_id,
    },
    dataType: 'json',
    success: function(data) {
      if (data.status == 1) {
        $("#voteCount").html(parseInt($("#voteCount").html()) + 1);
      } else {
        popBox(data.info, 'info', 3, function() {
          if (data.nologin != undefined) {
            hmstar_common_show_user();
          }
        });
      }
    }
  })
}
/**
 * 公司介绍
 */
function hmstar_home_describe(project_id,op) {
  $.ajax({
    url: "/hmstar/project/describe/",
    data: {
      project_id:project_id,
      op:op,
    },
    dataType: 'json',
    success: function(data) {
      if (data.status == 1) {
        $('#hmstar-home-body').html(data.msg);
      } else {
        $('#hmstar-home-body').html(data.msg);
      }
      return true;
    }
  })
}
