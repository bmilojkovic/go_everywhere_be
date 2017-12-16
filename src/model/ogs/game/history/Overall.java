
package model.ogs.game.history;

import com.fasterxml.jackson.annotation.JsonInclude;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonPropertyOrder;

@JsonInclude(JsonInclude.Include.NON_NULL)
@JsonPropertyOrder({
    "deviation",
    "rating",
    "volatility",
    "games_played"
})
public class Overall {

    @JsonProperty("deviation")
    private Float deviation;
    @JsonProperty("rating")
    private Float rating;
    @JsonProperty("volatility")
    private Float volatility;
    @JsonProperty("games_played")
    private Long gamesPlayed;

    @JsonProperty("deviation")
    public Float getDeviation() {
        return deviation;
    }

    @JsonProperty("deviation")
    public void setDeviation(Float deviation) {
        this.deviation = deviation;
    }

    @JsonProperty("rating")
    public Float getRating() {
        return rating;
    }

    @JsonProperty("rating")
    public void setRating(Float rating) {
        this.rating = rating;
    }

    @JsonProperty("volatility")
    public Float getVolatility() {
        return volatility;
    }

    @JsonProperty("volatility")
    public void setVolatility(Float volatility) {
        this.volatility = volatility;
    }

    @JsonProperty("games_played")
    public Long getGamesPlayed() {
        return gamesPlayed;
    }

    @JsonProperty("games_played")
    public void setGamesPlayed(Long gamesPlayed) {
        this.gamesPlayed = gamesPlayed;
    }

}