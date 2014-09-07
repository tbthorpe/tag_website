<div id="members" class="section">
	<ul>
		<?php foreach ($players as $player): ?>
			<li class="round <?php echo $player['Player']['id'] == $it ? 'it' : ''; ?>">
				<img src="/files/player_pics/<?php echo $player['MugShot']['filename']; ?>">
				<div class="it_amount" style="height:<?php echo $tag_heights[$player['Player']['id']]; ?>"></div>
			</li>
		<?php endforeach; ?>
		<li style="clear:both;border:0;"></li>
	</ul>
	<div style="clear:both;border:0;"></div>
</div>
<div style="clear:both;"></div>
	<div id="countdown_container" class="section">
		<h3 class="head_title headline">GAME HAS GONE ON FOR:</h3>
		<div id="countdown" class="countdown"></div>
	</div>
	<div id="tag_count" class="section">
		<h3 class="head_title headline">THERE HAVE BEEN: <span style='font-size:42px;'><?php echo $total_tags-1; ?></span> TAGS</h3>
	</div>
	<div id="rules_container" class="section">
		<h3 class="head_title headline">BASIC RULES</h3>
		<ul id="rules_list">
			<li>Once tagged - you are it.</li>
			<li>When X tags Y - Y cannot tag X back as their next tag (no tag-backs)</li>
			<li>When X tags Y - X cannot be tagged by anyone for the 60 minutes following his tag of Y (even if Y -> Z then Z -> X.  An hour has to pass before X can be it again)</li>
			<li>Tagging someone is almost exactly like icing someone. Be clever. You know you wouldn't just hand someone an Ice be ok with that. So by that measure, just walking up to someone and tagging them isn't part of the game.</li>
			<li>The tag has to be personal, and delivered by the tag-er. Sending a telegram, letter, or whatever is akin to just texting someone and saying "Tag. You're it." That is dumb and doesn't count. If you dress up as a clown and bring a telegram and
					flowers to someones office and personally deliver them - that counts, because that's good. 
			</li>
			<li>In the event that a tag is disuputed, the *present* players will take a vote. Those not witnessing the tag don't get a vote on its legitimacy. Majority wins</li>
			<li>In the event of a tag dispute and there are only the tagger and tagee present, RPS, big star little star, first to two big stars - will determine the outcome.</li>
			<li>NOTE: Don't dispute because you're upset you got got. Take the tag and play on. It's a game. Unless someone tries to send you a telegram to tag you. Dispute that and you should win, hands down.</li>
		</ul>
	</div>
</div>