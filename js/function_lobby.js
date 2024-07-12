applyLobbyFilter = function (type) {
  switch (type) {
    case "all":
      $("#popular__rooms").css({
        display: "block",
      });
      $("#country__rooms").css({
        display: "block",
      });
      $("#dating__rooms").css({
        display: "block",
      });
      $("#friendship__rooms").css({
        display: "block",
      });
      $("#filterAll").css({
        fontWeight: "bold",
      });
      $("#filterPopular").css({
        fontWeight: "normal",
      });
      $("#filterCountry").css({
        fontWeight: "normal",
      });
      $("#filterDating").css({
        fontWeight: "normal",
      });
      $("#filterFriendship").css({
        fontWeight: "normal",
      });
      break;
    case "popular":
      $("#popular__rooms").css({
        display: "block",
      });
      $("#country__rooms").css({
        display: "none",
      });
      $("#dating__rooms").css({
        display: "none",
      });
      $("#friendship__rooms").css({
        display: "none",
      });
      $("#filterAll").css({
        fontWeight: "normal",
      });
      $("#filterPopular").css({
        fontWeight: "bold",
      });
      $("#filterCountry").css({
        fontWeight: "normal",
      });
      $("#filterDating").css({
        fontWeight: "normal",
      });
      $("#filterFriendship").css({
        fontWeight: "normal",
      });
      break;
    case "friendship":
      $("#popular__rooms").css({
        display: "none",
      });
      $("#country__rooms").css({
        display: "none",
      });
      $("#dating__rooms").css({
        display: "none",
      });
      $("#friendship__rooms").css({
        display: "block",
      });
      $("#filterAll").css({
        fontWeight: "normal",
      });
      $("#filterPopular").css({
        fontWeight: "normal",
      });
      $("#filterCountry").css({
        fontWeight: "normal",
      });
      $("#filterDating").css({
        fontWeight: "normal",
      });
      $("#filterFriendship").css({
        fontWeight: "bold",
      });
      break;
    case "dating":
      $("#popular__rooms").css({
        display: "none",
      });
      $("#country__rooms").css({
        display: "none",
      });
      $("#dating__rooms").css({
        display: "block",
      });
      $("#friendship__rooms").css({
        display: "none",
      });
      $("#filterAll").css({
        fontWeight: "normal",
      });
      $("#filterPopular").css({
        fontWeight: "normal",
      });
      $("#filterCountry").css({
        fontWeight: "normal",
      });
      $("#filterDating").css({
        fontWeight: "bold",
      });
      $("#filterFriendship").css({
        fontWeight: "normal",
      });
      break;
    case "country":
      $("#popular__rooms").css({
        display: "none",
      });
      $("#country__rooms").css({
        display: "block",
      });
      $("#dating__rooms").css({
        display: "none",
      });
      $("#friendship__rooms").css({
        display: "none",
      });
      $("#filterAll").css({
        fontWeight: "normal",
      });
      $("#filterPopular").css({
        fontWeight: "normal",
      });
      $("#filterCountry").css({
        fontWeight: "bold",
      });
      $("#filterDating").css({
        fontWeight: "normal",
      });
      $("#filterFriendship").css({
        fontWeight: "normal",
      });
      break;
    default:
      $("#popular__rooms").css({
        display: "block",
      });
      $("#country__rooms").css({
        display: "block",
      });
      $("#dating__rooms").css({
        display: "block",
      });
      $("#friendship__rooms").css({
        display: "block",
      });
      break;
  }
};
applyMLobbyFilter = function (type) {
  switch (type) {
    case "all":
      $("#popular__rooms").css({
        display: "block",
      });
      $("#country__rooms").css({
        display: "block",
      });
      $("#dating__rooms").css({
        display: "block",
      });
      $("#friendship__rooms").css({
        display: "block",
      });
      $("#mfilterAll").css({
        color: "#2ecc71",
        border: "1px solid #2ecc71",
      });
      $("#mfilterPopular").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterCountry").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterDating").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterFriendship").css({
        color: "white",
        border: "1px solid white",
      });
      break;
    case "popular":
      $("#popular__rooms").css({
        display: "block",
      });
      $("#country__rooms").css({
        display: "none",
      });
      $("#dating__rooms").css({
        display: "none",
      });
      $("#friendship__rooms").css({
        display: "none",
      });
      $("#mfilterAll").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterPopular").css({
        color: "yellow",
        border: "1px solid yellow",
      });
      $("#mfilterCountry").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterDating").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterFriendship").css({
        color: "white",
        border: "1px solid white",
      });
      break;
    case "friendship":
      $("#popular__rooms").css({
        display: "none",
      });
      $("#country__rooms").css({
        display: "none",
      });
      $("#dating__rooms").css({
        display: "none",
      });
      $("#friendship__rooms").css({
        display: "block",
      });
      $("#mfilterAll").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterPopular").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterCountry").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterDating").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterFriendship").css({
        color: "#3498db",
        border: "1px solid #3498db",
      });
      break;
    case "dating":
      $("#popular__rooms").css({
        display: "none",
      });
      $("#country__rooms").css({
        display: "none",
      });
      $("#dating__rooms").css({
        display: "block",
      });
      $("#friendship__rooms").css({
        display: "none",
      });
      $("#mfilterAll").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterPopular").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterCountry").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterDating").css({
        color: "#8e44ad",
        border: "1px solid #8e44ad",
      });
      $("#mfilterFriendship").css({
        color: "white",
        border: "1px solid white",
      });
      break;
    case "country":
      $("#popular__rooms").css({
        display: "none",
      });
      $("#country__rooms").css({
        display: "block",
      });
      $("#dating__rooms").css({
        display: "none",
      });
      $("#friendship__rooms").css({
        display: "none",
      });
      $("#mfilterAll").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterPopular").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterCountry").css({
        color: "#d35400",
        border: "1px solid #d35400",
      });
      $("#mfilterDating").css({
        color: "white",
        border: "1px solid white",
      });
      $("#mfilterFriendship").css({
        color: "white",
        border: "1px solid white",
      });
      break;
    default:
      $("#popular__rooms").css({
        display: "block",
      });
      $("#country__rooms").css({
        display: "block",
      });
      $("#dating__rooms").css({
        display: "block",
      });
      $("#friendship__rooms").css({
        display: "block",
      });
      break;
  }
};
